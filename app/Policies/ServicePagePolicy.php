<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ServicePage;
use Illuminate\Auth\Access\HandlesAuthorization;


class ServicePagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ServicePage  $servicepage
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ServicePage $servicepage)
    {
        return $user->hasPermissionTo('view servicepage');
        }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create servicepage');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ServicePage  $servicepage
     * @return \Illuminate\Auth\service\Response|bool
     */
    public function update(User $user, ServicePage $servicepage)
    {
        return $user->hasPermissionTo('edit servicepage');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ServicePage  $servicepage
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ServicePage $servicepage)
    {
        return $user->hasPermissionTo('delete servicepage');
    }
}
