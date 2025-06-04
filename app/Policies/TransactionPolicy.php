<?php

namespace App\Policies;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TransactionPolicy
{
    public function viewAny(User $user): bool|Response
    {
        return $user->role === 'admin'
            ? Response::allow()
            : Response::deny('Only admins can view all transactions.');
    }

    public function view(User $user, Transaction $transaction): bool|Response
    {
        return $user->role === 'admin' || $transaction->customer_id === $user->id
            ? Response::allow()
            : Response::deny('You do not have permission to view this transaction.');
    }

    public function create(User $user): bool|Response
    {
        return $user->role === 'customer'
            ? Response::allow()
            : Response::deny('Only customers can create transactions.');
    }

    public function update(User $user, Transaction $transaction): bool|Response
    {
        return $transaction->customer_id === $user->id
            ? Response::allow()
            : Response::deny('You can only update your own transactions.');
    }

    public function delete(User $user, Transaction $transaction): bool|Response
    {
        return $user->role === 'admin'
            ? Response::allow()
            : Response::deny('Only admins can delete transactions.');
    }

    public function restore(User $user, Transaction $transaction): bool
    {
        return false;
    }

    public function forceDelete(User $user, Transaction $transaction): bool
    {
        return false;
    }
}
