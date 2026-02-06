<?php

namespace App\Policies;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class IdeaPolicy
{

    /**
     * Determine whether the user can view the model.
     */
    public function update(User $user, Idea $idea): bool
    {
        return $user->id === $idea->user_id;

        //вариант с загрузкой модели пользователя (не рекомендуется)
        //        return $user->is($idea->user);

        //Если id пользователя равен id пользователя в идеи, то либо разреши либо ответь как будто не найдено
        //        return $user->id === $idea->user_id ? Response::allow() : Response::denyAsNotFound();
    }

    public function create(): bool
    {
        return true;
    }
}
