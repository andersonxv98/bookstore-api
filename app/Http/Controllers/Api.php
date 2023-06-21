<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Api extends Controller
{
    public function create(Request $request)
    {
        /*var_dump("OLÀ: ");
        print_r("request");
        dump("test");*/
        return view('auth.login');
        
    }

    public function read(Request $request)
    {
        /*var_dump("OLÀ: ");
        print_r("request");
        dump("test");*/
        return view('auth.login');
        
    }

    public function update(Request $request)
    {
        /*var_dump("OLÀ: ");
        print_r("request");
        dump("test");*/
        return view('auth.login');
        
    }

    public function delete(Request $request)
    {
        /*var_dump("OLÀ: ");
        print_r("request");
        dump("test");*/
        return view('auth.login');
        
    }
}
