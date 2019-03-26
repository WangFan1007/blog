<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;

use App\Home\Member;

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

    public function test3()
    {
        $date = date('Y-m-d H:i:s',time());

        // $time = time();
        $time = strtotime('+1 year');
        // return view('home.test.test3',['date'=>$date]);

        return view('home/test/test3',compact('date','time'));
    }

    public function test4()
    {
        $data = DB::table('member')->get();

        return view('home/test/test4',compact('data'));

    }

    public function test6()
    {
        $data = DB::table('member')->get();

        return view('home/test/test6',compact('data'));

    }

    public function test7()
    {
        return '请求提交成功';
    }


    public function test8(Request $request)
    {
        //AR 模型添加操作
        $model = new Member();
        // $res = $model->get();
        // dump($res);

        // $model->m_name = 'dust';
        // $model->age = '29';
        // $model->email = '1036815077@qq.com';
        // $res = $model->save();
        // dump($res);

        $res = $model->create($request->all());
        dump($res);

    }
    public function test9()
    {
        //查询操作
        // $res = Member::find(6);
        // dump($res);

        $res = Member::where('id','>','4')->get();
        // $res = Member::where('id','>','4')->first();
        // $res = Member::all();
        // dump($res);
        dump($res->toArray());
    }
    public function test10()
    {
        //AR 模式修改操作
        // $data = Member::find('2');
        // $data->email = 'lisalisa2@163.com';
        // $data->save();
        // dump($data->toArray());

        $res = Member::where('id','=',3)->update(['m_name'=>'王小五']);
        dump($res);
    }
    public function test11()
    {
        //AR 模式删除操作
        $data = Member::find(5);
        if ($data) {
            $res = $data->delete();
            dump($res);
        }
        dump($data);
       
        
    }

    public function test12()
    {
        return view('home.test.test12');
    }

    public function test13(Request $request)
    {
        $method = Input::method();
        if ($method == 'POST') {
            $this->validate($request,[
                'm_name'=>'required|min:2|max:20',
                'age'=>'required|integer|min:1|max:150',
                'email'=>'required|email'
            ]);
        }else {
            return view('home/test/test13');
        }
    }

    public function test14(Request $request)
    {
        if (Input::method() == 'POST') {
            // dump($request);
            if ($request->hasFile('avatar') and $request->file('avatar')->isValid()) {
                
                $path = md5(time() . rand(100000,999999)) .'.'. $request->file('avatar')->getClientOriginalExtension();
                $request->file('avatar')->move('./uploads',$path);
                // dump($request->file('avatar')->getClientOriginalExtension());
                $data = $request->all();
                $data['avatar'] = './uploads/' . $path;
                Member::create($data); 
            }
        }else {
            return view('home.test.test14');
        }
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
