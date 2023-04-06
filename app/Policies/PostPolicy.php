<?php

namespace App\Policies;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Posts $posts)
    {
        if ($posts->approved) {
            return true;
        }

        // visitors cannot view unapproved items
        if ($user === null) {
            return false;
        }

        // admin overrides approved status
        if ($user->can('view unapproved posts')) {
            return true;
        }

        // authors can view their own unapproved posts
        return $user->id == $posts->userID;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        if($user->can('create posts')){
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Posts $posts)
    {
        if ($user->can('edit own posts')) {
            return $user->id == $posts->userID;
        }

        if ($user->can('edit all posts')) {
            return true;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Posts $posts)
    {
        if ($user->can('delete own posts')) {
            return $user->id == $posts->userID;
        }

        if ($user->can('delete any post')) {
            return true;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Posts $posts)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Posts $posts)
    {
        //
    }
}
