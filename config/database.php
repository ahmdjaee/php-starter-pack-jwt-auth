<?php

function getDatabaseConfig(): array
{

    return  [
        "database" => [
            "development" => [
                "url" => "mysql:host=localhost;dbname=login_management",
                "username" => "root",
                "password" => ""
            ],
            "production" => [
                "url" => "mysql:host=localhost;dbname=login_management",
                "username" => "root",
                "password" => ""
            ],
        ]
    ];
}
