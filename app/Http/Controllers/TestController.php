<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class TestController extends Controller
{
    public function test1()
    {
        phpinfo();
    }

    public function test2()
    {
        echo Input::get('id','10086') . '<br>';
        // echo 'every thing is OK';
        $all = Input::all();

        // dd($all);
        dump($all);
        dump(Input::has('name'));

    }
}
