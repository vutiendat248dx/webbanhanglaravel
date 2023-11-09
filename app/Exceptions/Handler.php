<?php

namespace App\Exceptions;

use GuzzleHttp\Psr7\Request;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
// use Illuminate\Auth\Access\AuthorizationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->renderable(function (AuthenticationException $e, $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'Lỗi đăng nhập',
                ], 404);
            }
        });
    }
}
