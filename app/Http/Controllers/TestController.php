<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;

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

    public function add()
    {
        $db = DB::table('member');
        $rst = $db->insert([
            [
                'm_name' => '张三',
                'age' => '23',
                'email' => 'zhangsan@itcast.cn'
            ],
            [
                'm_name' => '李四',
                'age' => '24',
                'email' => 'lisi@itcast.cn'
            ],
            [
                'm_name' => '王五',
                'age' => '25',
                'email' => 'wangwu@itcast.cn'
            ],
        ]);
        dump($rst);
    }
    public function update()
    {
        $db = DB::table('member');
        $rst = $db->where('id','=','1')->update(['m_name' => '张三丰']);
        dump($rst);
    }

    public function select()
    {
        $db = DB::table('member');
        $data = $db->get();
        // dump($data);
        foreach ($data as $key => $value) {
            // dump($value);
            echo "key:{$key} id:{$value->id} m_name: {$value->m_name} age:{$value->age} email:{$value->email}<br>";
        }
    }
    
    public function del()
    {
        $db = DB::table('member');
        $res = $db->where('id','<','3')->delete();
        dump($res);
    }
    /**
     * 
     * 任意的sql语句 insert update delete (影响记录的)
     * DB::statement("insert into member values('wang',20,'1036815077@qq.com')")
     * 
     * 任意select语句(不影响记录的)
     * DB::select('select * from member')
     * 
     *  */
}
