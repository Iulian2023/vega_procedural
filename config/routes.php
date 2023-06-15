<?php 

    get("/", ["testController", "index"]);

    get("/hello", ["testController", "toGreat"]);

    get("/users", ["userController", "index"]);

?>