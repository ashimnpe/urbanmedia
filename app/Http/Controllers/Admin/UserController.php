<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\UserInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    protected UserInterface $userService;

    public function __construct(UserInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAll();
        return Inertia::render('user', ['users' => $users]);
    }

    public function store(UserRequest $request)
    {
        $user = $this->userService->createUser($request);
        return Inertia::render('user', ['user' => $user]);
    }

    public function update(UserRequest $request, $id)
    {
        $user = $this->userService->updateUser($request, $id);
        return Inertia::render('user', ['user' => $user]);
    }

    public function destroy($id)
    {
        $user = $this->userService->deleteUser($id);
        if ($user) {
            return Inertia::render('user', ['user' => $user]);
        } else {
            return "User Not Found";
        }
    }
}
