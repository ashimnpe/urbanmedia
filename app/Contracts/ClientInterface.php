<?php

namespace App\Contracts;


interface ClientInterface
{
    function getAll();
    function getClientById($id);
    function createClient($request);
    function updateClient($request, $id);
    function deleteClient($id);
}
