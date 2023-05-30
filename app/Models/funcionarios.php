<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionarios extends Model
{
    protected $table = 'users';

    public function updateUser($id,$name,$email)
    {
        $user = funcionarios::find($id);
        $user->name = $name;
        $user->email = $email;
        $user->save();
    }
}
