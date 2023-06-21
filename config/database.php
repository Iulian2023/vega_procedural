<?php
/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn_db      = "$_ENV[DB_CONNECTION]:dbname=$_ENV[DB_DATABASE];host=$_ENV[DB_HOST];post=$_ENV[DB_PORT]";
$user_db     = "$_ENV[DB_USERNAME]";
$password_db = "$_ENV[DB_PASSWORD]";

try {
    $db = new PDO($dsn_db, $user_db, $password_db);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    die("ERROR database connection : " . $e->getMessage());
}


?>