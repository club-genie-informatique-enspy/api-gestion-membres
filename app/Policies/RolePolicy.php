<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  User  $user
     * @return Response|bool
     */
    public function viewAny(User $user): Response|bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  User  $user
     * @param  Role  $role
     * @return Response|bool
     */
    public function view(User $user, Role $role): Response|bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  User  $user
     * @return Response|bool
     */
    public function create(User $user): Response|bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  User  $user
     * @param  Role  $role
     * @return Response|bool
     */
    public function update(User $user, Role $role): Response|bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  User  $user
     * @param  Role  $role
     * @return Response|bool
     */
    public function delete(User $user, Role $role): Response|bool
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  User  $user
     * @param  Role  $role
     * @return Response|bool
     */
    public function restore(User $user, Role $role): Response|bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  User  $user
     * @param  Role  $role
     * @return Response|bool
     */
    public function forceDelete(User $user, Role $role): Response|bool
    {
        return true;
    }
}