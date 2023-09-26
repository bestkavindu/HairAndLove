<?php

namespace App\Policies;

use App\Models\User;
use App\Models\BlogNews;
use Illuminate\Auth\Access\HandlesAuthorization;


class BlogNewsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogNews  $blognews
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, BlogNews $blognews)
    {
        return $user->hasPermissionTo('view blognews');
        }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create blognews');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\proBlogNewsduct  $blognews
     * @return \Illuminate\Auth\BlogNews\Response|bool
     */
    public function update(User $user, BlogNews $blognews)
    {
        return $user->hasPermissionTo('edit blognews');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogNews  $blognews
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, BlogNews $blognews)
    {
        return $user->hasPermissionTo('delete blognews');
    }
}
