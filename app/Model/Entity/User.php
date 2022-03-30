<?php

namespace App\Model\Entity;

use DateTime;
use Exception;
use PDO;
use stdClass;

class User {

    /**
     * @var string
     */
    private $cpf;

    /**
     * @var string
     */
    private $matricula;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $celular;

    /**
     * @var string
     */
    private $email;

    /**
     * @var DateTime
     */
    private $dataNascimento;

    /**
     * @param integer $id
     * @return stdClass
     */
    public static function getUser($id) {
        $DB = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME, DBUSER, DBPASS);
        $sql = "SELECT id, username, firstname FROM mdl_user WHERE id = :id";
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        } 
        throw new Exception("Nenhum usuário encontrado!", 404);
    }
}