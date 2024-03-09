<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\PenyewaanLapangan;
use App\Models\User;

class PenyewaanLapanganPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, PenyewaanLapangan $penyewaanLapangan): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, PenyewaanLapangan $penyewaanLapangan): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, PenyewaanLapangan $penyewaanLapangan): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, PenyewaanLapangan $penyewaanLapangan): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, PenyewaanLapangan $penyewaanLapangan): bool
    {
        //
    }
}
