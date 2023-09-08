<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    public function update(User $user, User $targetUser)
    {
        // ユーザーが管理者である場合は常に許可
        if ($user->isAdmin()) {
            return true;
        }

        // ユーザーが自身の情報を更新する場合は許可
        if ($user->id === $targetUser->id) {
            return true;
        }

        

        // それ以外の場合は拒否
        return false;
    }
}






