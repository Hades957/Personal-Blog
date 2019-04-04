<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Links as LinksModel;

class Links extends Controller
{
    public function lst()//链接列表
    {
        // 分页显示
        $list = LinksModel::paginate(5);// 获取数据
        $this->assign('list',$list);// 分配到模板中
        return $this->fetch();
    }

    public function add()//链接添加
    {
        if(request()->isPost()){
            // 接收传递过来的数据
            $data=[
                'title'=>input('title'),
                'url'=>input('url'),       
                'desc'=>input('desc'),          
            ];
            //对数据进行验证
            $validate = \think\Loader::validate('Links');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
                die;
            }

            // 执行添加操作，成功返回数据条数
            if(Db::name('links')->insert($data)){
                return $this->success('添加链接成功','lst');
            }
            else{
                return $this->error('添加链接失败');
            }
            return ;
        }
        return $this->fetch('add');
    }

    public function edit()// 编辑
    {
        $id=input('id');
        $Links=db('Links')->find($id);
        if(request()->isPost()){
            //查询数据
            $data=[
                'id'=>input('id'),
                'title'=>input('title'),
                'url'=>input('url'),       
                'desc'=>input('desc'),          
            ];

            //对数据进行验证
            $validate = \think\Loader::validate('Links');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
                die;
            }            

            if(db('Links')->update($data)){
                $this->success('修改链接成功！','lst');
            }else{
                $this->error('修改链接失败！','lst');
            }
            return;
        }        
        
        //分配到模板中
        $this->assign('Links',$Links);//assign(分配到模板中的名称，分配到模板中的变量)
        return $this->fetch('edit');
    }

    public function del(){
        $id=input('id');
        if(db('links')->delete(input('id'))){
            $this->success('删除链接成功！','lst');
        }else{
            $this->error('删除链接失败！');
        }
    }   
}
