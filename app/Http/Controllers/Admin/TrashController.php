<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\TrashInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TrashController extends Controller
{
      protected TrashInterface $trashService;

    public function __construct(TrashInterface $trashService)
    {
        $this->trashService = $trashService;
    }

    public function index()
    {
        $trash = $this->trashService->getAll();
        return Inertia::render('trash', ['trash' => $trash]);
    }

    public function restore($type, $id)
    {
        $this->trashService->restore($type, $id);
        return Inertia::render('trash');
    }

    public function delete($type, $id)
    {
        $this->trashService->delete($type, $id);
        return Inertia::render('trash');
    }
}
