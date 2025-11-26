<?php

namespace App\Contracts;


interface ContactInterface
{
    function getAll();
    function getContactById($id);
    public function deleteContact($id);
}
