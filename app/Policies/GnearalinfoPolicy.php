<?php

namespace App\Policies;

use App\Models\User;
use App\Models\GenaralInfo;
use Illuminate\Auth\Access\HandlesAuthorization;


class GenaralInfoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GenaralInfo  $genaralinfo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, GenaralInfo $genaralinfo)
    {
        return $user->hasPermissionTo('view genaralinfo');
        }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create genaralinfo');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GenaralInfo  $genaralinfo
     * @return \Illuminate\Auth\about\Response|bool
     */
    public function update(User $user, GenaralInfo $genaralinfo)
    {
        return $user->hasPermissionTo('edit genaralinfo');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\GenaralInfo  $about
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, GenaralInfo $genaralinfo)
    {
        return $user->hasPermissionTo('delete genaralinfo');
    }
}
