<?php

namespace Root\PHP\MVC\Middleware;

interface Middleware
{
    function before(): void;
}
