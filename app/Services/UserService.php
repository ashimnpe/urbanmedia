<?php

namespace App\Services;

use App\Contracts\UserInterface;
use App\Mail\UserCreatedMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Exception;

class UserService implements UserInterface
{
    public function getAll()
    {
        /** @var User|null $user */
        $user = Auth::user();
        $isSuperAdmin = $user && $user->hasRole('superadmin');

        $query = User::with('roles');

        if (!$isSuperAdmin) {
            $query->whereDoesntHave('roles', function ($query) {
                $query->where('name', 'superadmin');
            });
        }

        return $query->get()->map(function (User $user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->getRoleNames()->first(),
            ];
        });
    }

    public function getUserById($id)
    {
        try {
            $user = User::find($id);
            return $user;
        } catch (Exception $e) {
            throw new Exception('User not found', 404);
        }
    }

    public function createUser($request)
    {
        $validatedData = $request->validated();
        DB::beginTransaction();
        try {
            $user = User::create($validatedData);
            $user->assignRole($request->role);
            // Mail::to($user->email)->send(new UserCreatedMail($user));
            DB::commit();
            return $user;
        } catch (Exception $ex) {
            DB::rollBack();
            throw new Exception("Error creating User", 500);
        }
    }

    public function updateUser($request, $id)
    {
        $existingUser = $this->getUserById($id);
        $validatedData = $request->validated();
        try {
            if ($request->filled('role')) {
                $existingUser->syncRoles([$request->role]);
            }
            $existingUser->update($validatedData);
            return $existingUser;
        } catch (Exception $ex) {
            throw new Exception($ex, 500);
        }
    }

    public function deleteUser($id)
    {
        $user = $this->getUserById($id);
        try {
            $user->delete();
        } catch (Exception $e) {
            throw new Exception("Error deleting User", 500);
        }
    }
}
