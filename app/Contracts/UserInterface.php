<?php

namespace App\Contracts;


interface UserInterface
{
    function getAll();
    function getUserById($id);
    function createUser($request);
    public function updateUser($request, $id);
    public function deleteUser($id);
}
