<?php

namespace Modules\Edu\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Edu\Entities\Topic;

class TopicPolicy
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


    public function update(User $user, Topic $topic)
    {
        return $user->id==$topic['user_id'];
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
