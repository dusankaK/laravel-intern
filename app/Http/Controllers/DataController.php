<?php

use App\User;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;

class DataController extends Controller
{
    public function open()
    {
        return response()->json(['data' => 'This data is open for all users']);
    }

    public function close()
    {
        return response()->json(['data' => 'This data is for authenthicated users only']);
    }
}
