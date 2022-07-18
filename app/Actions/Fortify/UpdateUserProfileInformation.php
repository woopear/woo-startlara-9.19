<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            // rules
            // 'firstName' => ['required', 'string'],
            // 'lastName' => ['required', 'string'],
            // 'pseudo' => ['string'],
            'name' => ['required', 'string', 'max:255'],
            // 'address' => ['string'],
            // 'codePost' => ['string'],
            // 'city' => ['string'],
            // 'phone' => ['string'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
        ])->validateWithBag('updateProfileInformation');

        if (
            $input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail
        ) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
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
            ])->save();
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
        $user->forceFill([
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
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
