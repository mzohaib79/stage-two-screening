<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    protected $userService;

    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {

        $this->userService = $userService;

    }

     public function show(Request $request)
    {

        if ($request->ajax()) {
            return $this->userService->get($request);
        }
        return view('dashboard');
    }

}
