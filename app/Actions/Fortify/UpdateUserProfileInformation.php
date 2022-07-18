<?php

namespace App\Actions\Fortify;

use App\Http\Requests\UpdateUserProfilRequest;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * create object for pproperties update for user updated
     *
     * @param array $input
     * @return void
     */
    protected function userFill(array $input)
    {
        return [
            // 'first_name' => $input['firstName'],
            // 'last_name' => $input['lastName'],
            // 'pseudo' => $input['pseudo'],
            'name' => $input['name'],
            // 'name' => $input['firstName'] . ' ' . $input['lastName'],
            // 'address' => $input['address'],
            // 'code_post' => $input['codePost'],
            // 'city' => $input['city'],
            // 'phone' => $input['phone'],
            'email' => $input['email'],
        ];
    }

    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        // validate form update user
        $requestUserUpdate = new UpdateUserProfilRequest();
        Validator::make(
            $input,
            $requestUserUpdate->rules($user),
            $requestUserUpdate->messages(),
        )->validate();

        if (
            $input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail
        ) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill($this->userFill($input))->save();
            $this->updateRole($user, $input);
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill($this->userFill($input))->save();

        $this->updateRole($user, $input);

        $user->sendEmailVerificationNotification();
    }

    /**
     * update role of user if input role exist and role 
     * current user is root or admin
     *
     * @param [type] $user
     * @param array $input
     * @return void
     */
    protected function updateRole($user, array $input)
    {
        $roleUserCurrent = $user->getRole();
        if (
            $roleUserCurrent->libelle == 'root' || $roleUserCurrent->libelle == 'admin'
            && $input['role'] != ''
        ) {
            // get role request
            $role = Role::find($input['role']);
            // update role in user
            $role->users()->save($user);
        }
    }
}
