<?php

    function index() : string {
        ob_start();
        require TEMPLATES . "/test.html.php";
        return ob_get_clean();
    }

?>