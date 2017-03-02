<?php
    require "haumea/src/app.php";
    require "haumea/src/router.php";

    $config = array(
        "dev_mode" => true
    );

    $app = new Haumea\App();

    $app->get("/", function($args, $app){
        return array(
            200,
            "HackSandbox Identity Service",
            array(
                "Developer"=>"Jun Zheng",
                "Version"=>"Internal Alpha 0.1"
            )
        );
    });

    // Request to create a new user
    $app->post("users", function($args, $app){
        
    });

    $app->router->route();
?>