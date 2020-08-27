<?php

namespace App\Policies;

use App\Models\Site;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SitePolicy
{
    use HandlesAuthorization;

    public function before($user, $ability, $site = null)
    {

    }
    public function viewAny(User $user)
    {
        return true;
    }


    public function view(User $user, Site $site)
    {
        //
    }


    public function create(User $user)
    {
        return true;
    }


    public function update(User $user, Site $site)
    {
        //
    }


    public function delete(User $user, Site $site)
    {
        //
    }


    public function restore(User $user, Site $site)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Site  $site
     * @return mixed
     */
    public function forceDelete(User $user, Site $site)
    {
        //
    }
}
