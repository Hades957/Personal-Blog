<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Admin extends Controller
{
    public function lst()//管理员列表
    {
        return $this->fetch('lst');
    }

    public function add()//管理员添加
    {
        if(request()->isPost()){
            //接收传递过来的数据
            $data=[
                'username'=>input('username'),
                'password'=>md5(input('password')),
            ];
            //执行添加操作
            if(Db::name('admin')->insert($data)){
                return $this->success('添加管理员成功','lst');
            }
            else{
                return $this->error('添加管理员失败');
            }
            return ;
        }
        return $this->fetch('add');
    }

    public function edit()//管理员编辑
    {
        return $this->fetch('edit');
    }

   
}
