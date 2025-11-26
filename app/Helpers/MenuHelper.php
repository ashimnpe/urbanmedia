<?php

namespace App\Helpers;

class MenuHelper
{
    public static function getMenuItems($currentRouteName = null)
    {
        $currentRouteName = $currentRouteName ?? request()->route()?->getName();

        return [
            [
                'name' => 'Home',
                'route' => route('home'),
                'active' => $currentRouteName === 'home',
            ],
            [
                'name' => 'About Us',
                'route' => route('about'),
                'active' => $currentRouteName === 'about',
            ],
            [
                'name' => 'Services',
                'route' => route('services'),
                'active' => $currentRouteName === 'services',
            ],
            [
                'name' => 'Clients',
                'route' => route('clients'),
                'active' => $currentRouteName === 'clients',
            ],
            [
                'name' => 'Contact',
                'route' => route('contact'),
                'active' => $currentRouteName === 'contact',
            ],
        ];
    }
}
