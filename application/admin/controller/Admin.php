<?php
namespace app\admin\controller;
use think\Controller;

class Admin extends Controller
{
    public function lst()//管理员列表
    {
        return $this->fetch('lst');
    }

    public function add()//管理员添加
    {
        return $this->fetch('add');
    }

    public function edit()//管理员编辑
    {
        return $this->fetch('edit');
    }

   
}
