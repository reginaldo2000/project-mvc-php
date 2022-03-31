<?php

namespace App\Controller\Pages;

use App\Http\Request;
use App\Utils\View;

class UserController
{

    public static function showLogin()
    {
        return View::render('pages/login');
    }

    /**
     * @param array $data
     */
    public static function efetuarLogin(Request $data) {
        var_dump($data);
    }
}
