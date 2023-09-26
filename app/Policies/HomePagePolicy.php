<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Home;
use Illuminate\Auth\Access\HandlesAuthorization;


class HomePagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Home $home)
    {
        return $user->hasPermissionTo('view homepage');
        }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create homepage');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\prohomeduct  $home
     * @return \Illuminate\Auth\home\Response|bool
     */
    public function update(User $user, Home $home)
    {
        return $user->hasPermissionTo('edit homepage');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Home $home)
    {
        return $user->hasPermissionTo('delete homepage');
    }
}
