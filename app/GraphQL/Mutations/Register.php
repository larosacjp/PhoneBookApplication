<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;
use App\Models\User;

final class Register
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
            $user = new User();
            $user->email = $args['email'];
            $user->name = $args['name'];
            $user->password = \Hash::make($args['password']);
            $user->save();

            return $user;
    }
}
