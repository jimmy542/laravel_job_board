<?php

namespace App\Policies;
use App\Models\JobModel;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, JobModel $job): bool
    {
        
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, JobModel $jobModel): bool
    {
        return $user->id === $jobModel->by_user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, JobModel $jobModel): bool
    {
        return $user->id === $jobModel->by_user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, JobModel $jobModel): bool
    {
        return $user->id === $jobModel->by_user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, JobModel $jobModel): bool
    {
        return $user->id === $jobModel->by_user_id;
    }
}
