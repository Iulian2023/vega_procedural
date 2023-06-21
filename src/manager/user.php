<?php


    /**
     * Cette function du manager de la table "user" lui permet d'insérer un nouvel utilisateur
     *
     * @param array $cleanData
     * @return void
     */
    function createUser(array $cleanData) : void{
        require DB;

        $req = $db->prepare("INSERT INTO user (first_name, last_name, email, roles, password, created_at, updated_at) VALUES (:first_name, :last_name, :email, :roles, :password, now(), now() ) ");
        $req->bindValue(":first_name", $cleanData['firstName']);
        $req->bindValue(":last_name",  $cleanData['lastName']);
        $req->bindValue(":email",      $cleanData['email']);
        $req->bindValue(":roles",      json_encode(["ROLE_USER"]) );
        $req->bindValue(":password",  password_hash($cleanData['password'], PASSWORD_BCRYPT, ["cost" => 12]) );

        $req->execute();
        $req->closeCursor();
    }