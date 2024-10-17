<?php

namespace App\Observers;

use App\Models\User;
use Hash;

class UserObserver
{
    /**
     * Handle the User "creating" event.
    */
    public function creating(User $user)
    {
        $user->created_by = auth()->id() ?? null;
        $user->created_from_ip = request()->ip() ?? null;
    }
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        //
    }
    /**
     * Handle the User "updating" event.
     */
    public function updating(User $user)
    {
        $user->updated_by = auth()->id() ?? null;
        $user->updated_from_ip = request()->ip() ?? null;
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }
    /**
     * Handle the User "deleting" event.
    */
    public function deleting(User $user)
    {
        // Logic before deleting the user
    }
    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
