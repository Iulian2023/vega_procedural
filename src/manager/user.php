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

    /**
     * Cette fonction du manager de la table 'user' lui permet de récupérer l'utilisateur
     * en fonction du critère définit
     *
     * @param array $criteria
     * @return array|null
     */
    function findUserBy(array $criteria) : ?array {
        
        require DB;

        $keys = array_keys($criteria);


        $column = $keys[0];
        $req = $db->prepare("SELECT * FROM user WHERE {$column}=:{$column}");
        $req->bindValue(":{$column}", $criteria[$column]);
        $req->execute();

        if ( $req->rowCount() !== 1) {
            return null;
        }

        $user = $req->fetch();
        $req->closeCursor();

        return $user;
    }

    /**
     * Cette fonction du manager lui permet de modifier les iformation de l'utilisateur
     *
     * @param array $cleanData
     * @param integer $id
     * @return void
     */
    function editUser(array $cleanData, int $id) : void{
        require DB;

        $req = $db->prepare("UPDATE user SET first_name=:first_name, last_name=:last_name, email=:email, updated_at=now() WHERE id=:id");

        $req->bindValue(":first_name", $cleanData['firstName']);
        $req->bindValue(":last_name",  $cleanData['lastName']);
        $req->bindValue(":email",      $cleanData['email']);
        $req->bindValue(":id",         $id);

        $req->execute();
        $req->closeCursor();
    }

    /**
     * Cette fonction du manager lui permet de modifier le mot de passe de l'utilisateur
     *
     * @param string $newPassword
     * @param integer $user_id
     * @return void
     */
    function editUserPassword(string $newPassword, int $user_id) : void{
        require DB;

        $req = $db->prepare("UPDATE user SET password=:password, updated_at=now() WHERE id=:id");
        $req->bindValue(":password", password_hash($newPassword, PASSWORD_BCRYPT, ['cost' => 12]) );
        $req->bindValue(":id", $user_id);
        $req->execute();

        $req->closeCursor();
    }


    /**
     * Cette fonction de manager lui permet de supprimer un utilisateur
     *
     * @param integer $id
     * @return void
     */
    function deleteUser(int $id) : void{
        require DB;

        $req = $db->prepare("DELETE FROM user WHERE id=:id");
        $req->bindValue(":id", $id);
        $req->execute();
        $req->closeCursor();
    }