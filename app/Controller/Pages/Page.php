<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Page
{

    /**
     * @param string $title
     * @param string $content
     * @return string
     */
    public static function getPage($title, $content)
    {
        return View::render('pages/page', [
            'title' => $title,
            'content' => $content
        ]);
    }
}

