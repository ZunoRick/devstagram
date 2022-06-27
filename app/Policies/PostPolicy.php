<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    //Un Policy permite ver, modificar o eliminar al usuario un registro
    use HandlesAuthorization;

    public function delete(User $user, Post $post)
    {
        //retorna true o false, $user ya es el usuario autenticado
        return $user->id === $post->user_id;
    }
}
