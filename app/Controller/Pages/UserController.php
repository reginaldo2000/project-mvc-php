<?php

namespace App\Controller\Pages;

use App\Http\Response;
use App\Model\Entity\User;
use Exception;

class UserController
{

    public static function getUser($id)
    {
        try {
            $user = User::getUser($id);
            $response = [
                'cpf' => $user->username,
                'matricula' => $user->username,
                'nome' => utf8_encode($user->firstname)
            ];
            return $response;
        } catch (Exception $e) {
            return ['erro'=> $e->getMessage()];
        }
    }
}
