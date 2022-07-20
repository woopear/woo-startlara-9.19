<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class UserController extends Controller
{
    /**
     * delete user
     *
     * @return void
     */
    public function delete($id)
    {
        $user = User::find($id);
        $res = $user->delete();

        if ($res) {
            return redirect()->route('home');
        } else {
            return back()->with('status', 'Une erreur est survenue. Impossible de supprimer le compte');
        }
    }
}
