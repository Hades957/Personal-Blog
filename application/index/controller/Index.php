<?php
namespace app\index\controller;
use app\index\controller\Base;
class Index extends Base
{
    public function index()
    {
    	$articleres=db('article')->order('id desc')->paginate(3);
    	$this->assign('articleres',$articleres);
        return $this->fetch();
    }




}
