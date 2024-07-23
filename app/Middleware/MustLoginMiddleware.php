<?php

namespace Root\PHP\MVC\Middleware;

use Root\PHP\MVC\App\View;
use Root\PHP\MVC\Service\SessionService;

class MustLoginMiddleware implements Middleware
{
    public function __construct(
        protected SessionService $sessionService
    ) {
    }

    function before(): void
    {
        $user = $this->sessionService->current();
        if ($user == null) {
            View::redirect('/users/login');
        }
    }
}
