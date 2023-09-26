<?php

namespace App\Policies;

use App\Models\User;
use App\Models\BlogNewsPage;
use Illuminate\Auth\Access\HandlesAuthorization;


class BlogNewsPagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogNewsPage  $blognewspage
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, BlogNewsPage $blognewspage)
    {
        return $user->hasPermissionTo('view blognewspage');
        }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create blognewspage');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogNewsPage  $blognewspage
     * @return \Illuminate\Auth\about\Response|bool
     */
    public function update(User $user, BlogNewsPage $blognewspage)
    {
        return $user->hasPermissionTo('edit blognewspage');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogNewsPage  $about
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, BlogNewsPage $blognewspage)
    {
        return $user->hasPermissionTo('delete blognewspage');
    }
}
