<?php

namespace App\Policies;

use App\Models\User;
use App\Models\AboutPage;
use Illuminate\Auth\Access\HandlesAuthorization;


class AboutPagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AboutPage  $aboutpage
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, AboutPage $aboutpage)
    {
        return $user->hasPermissionTo('view aboutpage');
        }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create aboutpage');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AboutPage  $aboutpage
     * @return \Illuminate\Auth\about\Response|bool
     */
    public function update(User $user, AboutPage $aboutpage)
    {
        return $user->hasPermissionTo('edit aboutpage');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AboutPage  $about
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, AboutPage $aboutpage)
    {
        return $user->hasPermissionTo('delete aboutpage');
    }
}
