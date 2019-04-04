<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Admin as AdminModel;

class Admin extends Controller
{
    public function lst()//管理员列表
    {
        // 分页显示
        $list = AdminModel::paginate(5);// 获取数据
        $this->assign('list',$list);// 分配到模板中
        return $this->fetch();
    }

    public function add()//管理员添加
    {
        if(request()->isPost()){
            // 接收传递过来的数据
            $data=[
                'id'=>input('id'),
                'url'=>input('url'),
            ];
            //对数据进行验证
            $validate = \think\Loader::validate('Admin');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
                die;
            }

            // 执行添加操作，成功返回数据条数
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

    public function edit()// 管理员编辑
    {
        $id=input('id');
        $admins=db('admin')->find($id);
        if(request()->isPost()){
            //查询数据
            $data=[
                'id'=>input('id'),
                'username'=>input('username'),                
            ];

            //对数据进行验证
            $validate = \think\Loader::validate('Admin');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
                die;
            }

            if(input('password')){
                $data['password']=md5(input('password'));
            }else{
                $data['password']=$admins['password'];
            }

            

            if(db('admin')->update($data)){
                $this->success('修改管理员信息成功！','lst');
            }else{
                $this->error('修改管理员信息失败！','lst');
            }
            return;
        }
        
        
        //分配到模板中
        $this->assign('admins',$admins);//assign(分配到模板中的名称，分配到模板中的变量)
        return $this->fetch('edit');
    }

    public function del(){
        $id=input('id');
        if($id != 2){
            if(db('admin')->delete(input('id'))){
                $this->success('删除管理员成功！','lst');
            }else{
                $this->error('删除管理员失败！');
            }
        }else{
            $this->error('初始化管理员不能删除！');
        }
    }

   
}
