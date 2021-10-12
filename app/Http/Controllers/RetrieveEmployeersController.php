<?php

namespace App\Http\Controllers;

use App\Models\Employeer;
use Illuminate\Http\Request;

class RetrieveEmployeersController extends Controller
{
    public function getAll()
    {
        $employeers = Employeer::all();
        return $employeers;
    }

    public function edit(Request $request)
    {

    }
}
