<?php

namespace App\Contracts;


interface TrashInterface
{
    function getAll();
    function restore($type, $id);
    function delete($type, $id);
}
