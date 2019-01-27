<?php
namespace app\index\controller;
use think\Controller;

class Cate extends Controller
{
    public function index()
    {
        return $this->fetch('cate');
    }
}
