<?php

namespace App\Http\Controllers;

use App\Services\Container;
use App\Services\Logger;
use App\Services\SessionStorage;
use App\Services\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        /*$storage = new SessionStorage();
        $user = new User($storage);
        $user->setLanguage('bn');
        dd($user->getLanguage('language'));*/

        /*$user = new User();
        dd($user);*/

        $container = new Container();

        $container->set(User::class, function (Container $c) {
            return new User($c->get(SessionStorage::class));
        });

        $container->set(SessionStorage::class, function (Container $c) {
            return new SessionStorage($c->get(Logger::class));
        });

        $container->set(Logger::class, function (Container $c) {
            return new Logger();
        });

        echo "ok";
        $user = $container->get(User::class);
        $user->setLanguage('bn');
        dd($user->getLanguage('language'));
    }
}
