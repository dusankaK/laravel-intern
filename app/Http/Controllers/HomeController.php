<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\TestException;


class HomeController extends Controller
{
    //
    public function index() 
    {   
        throw new TestException();
        // $name = 'Dusanka';
        // $age = 26;
        // return view('welcome', compact('name', 'age'));

    }

    public function greeting()
    {
        return view('simple', ['first_name' => 'Dušanka']);

    }

    public function age($age) 
    {
        return "You are {$age} years old.";
    }

    //crete, store, show, edit, update, destroy
    public function create()
    {
        return 'Welcome to dashboard';
    }

    public function store() 
    {
        //Some code here
        return 'User stored';
    }

    public function show($id) 
    {

    }

    public function edit($id) {
        return 'Make some changes';
    }

    public function update($id) {
        return 'Make some changes';
    }
    
    public function destroy($id) {
        return 'Delete this user';
    }
}
