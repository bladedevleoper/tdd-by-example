<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Router\Router;
use Exception;

class RouterTest extends TestCase
{
    //will run before each test
    protected function setUp(): void
    {
        Router::post('/profile', ['ProfileController', 'index']);
        Router::get('/show-profile', ['ProfileController', 'show']);
    }

    //will unset after each test
    protected function tearDown(): void
    {
        Router::$routes['post'] = [];
        Router::$routes['get'] = [];
    }

    /** @test */
    public function post_routes_can_hold_data()
    {
        $this->assertEquals(1, count(Router::$routes['post']));
    }
    
    /** @test */
    public function get_routes_can_hold_data()
    {
        $this->assertEquals(1, count(Router::$routes['get']));
    }

    /** @test */
    public function throw_exception_if_route_does_not_exist()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Url not found in the following route post');
        $route = Router::find('post', 'does-not-exist');
    }

    /** @test */
    public function throw_exception_if_route_already_exists()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Route /profile already exists in post');
        Router::post('/profile', ['ProfileController', 'index']);
    }

    /** @test */
    public function can_return_a_route_that_exists()
    {
        //Post routes
        $payload = Router::find('post', '/profile');   
        $shouldReturn = [
            'uri' => '/profile',
            'controller' => 'ProfileController',
            'method' => 'index',
        ];

        foreach ($shouldReturn as $key => $value) {
            $this->assertEquals($value, $payload->{$key});
        }

        //get routes
        $payload = Router::find('get', '/show-profile');   
        $shouldReturn = [
            'uri' => '/show-profile',
            'controller' => 'ProfileController',
            'method' => 'show',
        ];

        foreach ($shouldReturn as $key => $value) {
            $this->assertEquals($value, $payload->{$key});
        }
    }
}