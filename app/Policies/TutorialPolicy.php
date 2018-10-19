<?php

namespace App\Policies;

use App\Models\Tutorial;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TutorialPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @param User $user
     * @param Tutorial $tutorial
     * @return bool
     */
    public function update(User $user, Tutorial $tutorial)
    {
        return $user->owns($tutorial);
    }

    /**
     * @param User $user
     * @param Tutorial $tutorial
     * @return bool
     */
    public function delete(User $user, Tutorial $tutorial)
    {
        return $user->owns($tutorial);
    }
}
