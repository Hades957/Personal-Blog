# 个人博客项目 tp5框架 
---
## 前端制作 v0.0.1 18/01/2019

1. 引入前台模板文件

2. css/js样式替换(路径替换)

3. 模板分离

## 后台界面引入及分离 v0.0.2 06/02/2019
---
1. 创建对应控制器以及视图文件夹，添加后台模块配置文件

2. 修改前台html静态文件，加载css、js文件

3. 模板分离（顶部、侧边栏）

## 数据表创建 v0.0.3 12/02/2019
---
1. 确定数据表字段

	* tp_admin(id,username,password)

	* tp_article(id,title,author,desc,keywords,content,pic,time,click,state,cateid)

	* tp_cate(id,catename)

	* tp_tags(id,tagname)

2. 管理员添加逻辑和功能的实现

	* 修改前端文件，以适应功能要求

	* 利用request()->isPost()以及dump(input('post.'))验证是否接收到数据

	* 利用数据库的链式操作向数据库写入数据