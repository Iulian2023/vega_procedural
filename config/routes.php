<?php 

    get("/", ["testController", "index"]);

    get("/post/edit/{id}", ["postController", "edit"]);

?>