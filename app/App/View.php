<?php

namespace Root\PHP\MVC\App;

class View
{
    public static function render(string $view, array $model = []): void
    {
        require __DIR__ . '/../View/Templates/header.php';
        require __DIR__ . '/../View/' . $view . '.php';
        require __DIR__ . '/../View/Templates/footer.php';
    }

    public static function redirect(string $path): void
    {
        header('Location: ' . $path);
    }
}
