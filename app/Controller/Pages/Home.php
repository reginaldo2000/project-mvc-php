<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organizacao;

class Home extends Page
{
    public static function getHome()
    {
        $org = new Organizacao;
        $content = View::render('pages/home', [
            'title' => 'Projeto Iniciatia Vingadores',
            'descricao' => $org->descricao,
            'site' => $org->site,
            'nome' => $org->nome
        ]);
        return parent::getPage("Avenger Project", $content);
    }
}
