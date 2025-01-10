<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Middleware\Authenticate;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserModel extends Authenticatable implements JWTSubject
{
    // Add these methods

    use HasFactory;

    protected $table = 'user_model';

    protected $fillable = ['username', 'email', 'password'];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}

