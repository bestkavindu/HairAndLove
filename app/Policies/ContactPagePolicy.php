<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ContactPage;
use Illuminate\Auth\Access\HandlesAuthorization;


class ContactPagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContactPage  $contact
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ContactPage $contact)
    {
        return $user->hasPermissionTo('view contactpage');
        }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create contactpage');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContactPage  $contactpage
     * @return \Illuminate\Auth\about\Response|bool
     */
    public function update(User $user, ContactPage $contactpage)
    {
        return $user->hasPermissionTo('edit contactpage');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ContactPage  $about
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ContactPage $contactpage)
    {
        return $user->hasPermissionTo('delete contactpage');
    }
}
