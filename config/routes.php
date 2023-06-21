<?php 

    get ("/",         ["visitor/welcome/welcomeController", "index"]);

    get ("/register", ["visitor/registration/registerController", "register"]);
    post("/register", ["visitor/registration/registerController", "register"]);

    get("/login",     ["visitor/authentication/loginController", "login"]);
    post("/login",      ["visitor/authentication/loginController", "login"]);


?>