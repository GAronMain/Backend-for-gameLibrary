<?php

namespace App\Policies;

use App\Models\Favorite;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class FavoritePolicy
{
    /**
     * Minden bejelentkezett felhasználó láthatja a saját kedvenceit.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Csak a saját kedvencét nézheti meg.
     */
    public function view(User $user, Favorite $favorite): bool
    {
        return $user->id === $favorite->user_id;
    }

    /**
     * Bárki létrehozhat kedvencet (a controllerben a saját user_id-jét kapja).
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Csak a saját kedvencét törölheti.
     */
    public function delete(User $user, Favorite $favorite): bool
    {
        return $user->id === $favorite->user_id;
    }

    // Update nem szükséges (nincs update endpoint)
    public function update(User $user, Favorite $favorite): bool
    {
        return false;
    }

    public function restore(User $user, Favorite $favorite): bool
    {
        return false;
    }

    public function forceDelete(User $user, Favorite $favorite): bool
    {
        return false;
    }
}