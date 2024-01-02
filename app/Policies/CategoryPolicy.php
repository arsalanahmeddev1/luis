<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }

    public function create(User $user)
    {

        switch ($user->role) {
            case 'admin':
                return true;

            default:
                return false;
        }

    }

    public function viewAny(User $user)
    {

        switch ($user->role) {
            case 'admin':
                return true;

            default:
                return false;
        }

    }

    public function update(User $user)
    {

        switch ($user->role) {
            case 'admin':
                return true;

            default:
                return false;
        }

    }
    public function delete(User $user)
    {

        switch ($user->role) {
            case 'admin':
                return true;

            default:
                return false;
        }

    }
}
