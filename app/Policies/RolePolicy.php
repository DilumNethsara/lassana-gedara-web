<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{

    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     */
    public function coordinatorAccess(User $user){
        return $user->hasAnyRole(['admin', 'coordinator']);
    }

    public function adminAccess(User $user){
        return $user->hasRole('admin');
    }


    public function __construct()
    {
        //
    }
}
