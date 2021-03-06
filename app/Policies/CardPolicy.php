<?php

namespace App\Policies;

use App\User;
use App\Models\Card;
use Illuminate\Auth\Access\HandlesAuthorization;

class CardPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the card.
     *
     * @param  \App\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function view(User $user, Card $card)
    {
        //
    }

    /**
     * Determine whether the user can create cards.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->email === 'begimov@gmail.com';
    }

    /**
     * Determine whether the user can update the card.
     *
     * @param  \App\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function update(User $user, Card $card)
    {
        //
    }

    /**
     * Determine whether the user can delete the card.
     *
     * @param  \App\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function delete(User $user, Card $card)
    {
        //
    }
}
