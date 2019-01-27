<?php
namespace app\index\controller;
use think\Controller;

class Article extends Controller
{
    public function index()
    {
        return $this->fetch('article');
    }
}
