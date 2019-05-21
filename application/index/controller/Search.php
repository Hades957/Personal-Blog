<?php
namespace app\index\controller;
use app\index\controller\Base;
class Search extends Base
{
    public function index()
    {
        $keywords=input('keywords');
        $map['title']=['like','%'.$keywords.'%'];
        $searchres=db('article')->where($map)->order('id desc')->paginate($listRows = 8, $simple = false, $config = [
            'query'=>array('keywords'=>$keywords),
            ]);
        if($keywords){           
            $this->assign(array(
                'searchres'=>$searchres,
                'keywords'=>$keywords
                ));
        }else{
            $this->assign(array(
                'searchres'=>$searchres,
                'keywords'=>'暂无数据'
                ));
        }
        return $this->fetch('search');
    }




}
