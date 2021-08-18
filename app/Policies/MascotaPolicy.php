<?php

namespace App\Policies;

use App\User;
use App\Mascota;
use Illuminate\Auth\Access\HandlesAuthorization;

class MascotaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Mascota  $mascota
     * @return mixed
     */
    public function view(User $user, Mascota $mascota)
    {
        // return $mascota->user_id !== $user->id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Mascota  $mascota
     * @return mixed
     */
    public function update(User $user, Mascota $mascota)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Mascota  $mascota
     * @return mixed
     */
    public function delete(User $user, Mascota $mascota)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Mascota  $mascota
     * @return mixed
     */
    public function restore(User $user, Mascota $mascota)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Mascota  $mascota
     * @return mixed
     */
    public function forceDelete(User $user, Mascota $mascota)
    {
        //
    }
}
