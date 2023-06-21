<?php
declare(strict_types=1);

    /**
     * Cette function permet d'authentifier un utilisateur
     *
     * @param array $formData
     * @return array|null
     */
    function authenticate(array $formData) : ?array {
        /* Etablir une connexion */
        require DB;

        /* Effectuer la requête afin de vérifier si l'email envoyé par l'utilisateur
        * coresspond à celui d'un utilisteur de la table 'user'. */
        $req = $db->prepare("SELECT * FROM user WHERE email=:email LIMIT 1");
        $req->bindValue(":email", $formData['email']);
        $req->execute();

        /* Si l'email ne corespond pass, */
        if ( $req->rowCount() !== 1 ) {
            /* Retourne une valeur nulle */
            return null;
        }

        /* Dans le cas contraire, */
        /* Récupérons les donées de l'utilisateur en question */
        $user = $req->fetch();
        $req->closeCursor();
            /* Verifions si le mot de passe envoyé par l'utilisateur correspond
            * à  celui de l'utilisateur hashé dans la base de données.*/
            /* Si le mot de passe ne correspond pas */
        if ( ! password_verify($formData['password'], $user['password']) ) {
            /* Retourne une valeur nulle */
            return null;     
       }

        /* Dans le cas contraire */
        /* Retourne un tableau contenant les données de l'utilisateur */
            return $user;
        }