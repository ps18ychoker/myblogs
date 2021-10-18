<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    protected function create1($data , $msg = '' , $code = 200): Response
    {
        $result = [
            'code' => $code ,
            'msg'  => $msg ,
            'data' => $data
        ];
        return \response($result);
    }
    public function index()
    {
//        return view('users.index');
          return $this->create1(User::query()->select('id','name','email')->simplePaginate(5),'数据获取成功',200);
    }
    public function create()
    {
        return  view('users.register');
    }
    public function store()
    {
        $date = \request()->validate([
           'name' =>  'required',
            'email' =>  'required',
           'password' =>  'required'
        ]);
        User::query()->create($date);
//        $user = new User();
//        $user->name = \request('name');
//        $user->password = \request('password');
//        $user->email = \request('email');
//        $user->save();
        return redirect('/user');
    }
}
