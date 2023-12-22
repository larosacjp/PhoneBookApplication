<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use Illuminate\Foundation\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

final class Login
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $user =  User::where('email', $args['email'])->first();

        $credentials = [
            'email' => $args['email'],
            'password' => $args['password']
        ];

        if($user && \Hash::check($args['password'], $user->password)){
            return $user->createToken('accessToken')->plainTextToken;
        }else{
            return 'The provided credentials are incorrect';
        }
    }
}
