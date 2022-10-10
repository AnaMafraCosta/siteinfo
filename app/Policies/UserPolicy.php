<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function ver($userAuthenticated,$targetUser)
    {
        return $userAuthenticated->id == $targetUser->id
            ? Response::allow()
            : Response::deny('Não autorizado');
    }
    public function admin(){
        $user = Auth::user();
        return isset($user)&& $user->role ==='admin'
            ? Response::allow()
            : Response::deny('Não autorizado');
    }
}
