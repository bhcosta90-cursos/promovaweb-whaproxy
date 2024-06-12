<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Setup;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SetupPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Setup $plan): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Setup $plan): bool
    {
    }

    public function delete(User $user, Setup $plan): bool
    {
    }

    public function restore(User $user, Setup $plan): bool
    {
    }

    public function forceDelete(User $user, Setup $plan): bool
    {
    }
}
