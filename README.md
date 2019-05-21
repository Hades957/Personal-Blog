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

	* {:url('admin/lst')}-->admin控制器lst方法(重定向)

## 数据验证、验证场景以及管理员修改删除 v0.0.4 03/04/2019
---
1. 在服务器端进行数据管理员名称和密码进行验证(bug)

	* 利用Validate类进行验证，简单验证

	* $rule定义验证规则|$message定义验证错误提示|$scene定义验证场景

2. 管理员列表及分页

	* paginate分页并使用Model获取数据

	* 获取数据后分配到Model再在前端循环读取显示

3. 管理员修改

	* 类似于管理员的增加，先获取数据，再在数据库中查找，最后修改

	* 注意修改时要添加隐藏域，用于发送主键信息

4. 管理员删除

	* 获取要删除管理员的id

	* 判断是否为初始管理员，初始管理员不能删除

	* 修改模板，让初始管理员的删除标签消失

## 友情链接 v0.0.5 04/04/2019
---
1. 添加友情链接模块

	* 修改前端模板

	* 创建控制器/模块/视图文件

	* 修改使系统能够工作，注意细节之处的修改

## 栏目功能完成及唯一性验证补充 v0.0.5 10/04/2019
---
1. 创建栏目结构和模板

	* 创建前端模板

	* 创建控制器/模块/视图文件

	* 注意链接地址的修改
	
2. 修改具体内容进行调试

	* 修改模板

	* 修改控制器等信息

	* 修改与数据库相对应的字段

	* 修改验证时栏目名不能重复

## 文章添加界面处理 v0.0.6 20/04/2019
---
1. 创建文章模块的文件结构和模板

2. 完善文章的业务逻辑

3. 完善验证

4. 引入百度编辑器

5. 完善文章前端与后端的联系

6. 完善上传图片功能

## 文章修改模块 v0.0.7 25/04/2019
---
1. 增加文章删除功能

2. 增加文章编辑功能

3. 增加文章修改功能

3. 从数据库获取数据->分配到模板中->显示到前端

## 安装验证码&完成管理员登陆逻辑 v0.0.8 01/05/2019
---
1. 完整tp5包中包含了think-captcha

2. 增加管理员登陆功能

3. 前端的验证码提前已经写好，只需后台实现其逻辑

4. 修改配置文件config.php，实现验证码功能

## 剩余功能完善 v0.1.0 10/05/2019
---
1. 简单权限认证

2. 导航显示

3. 列表页面

4. 文章内容页面及当前位置

5. 首页及右侧数据调用

6. tag标签显示

7. 相关文章调用

8. 搜索及分页

## 博客前端优化（bootstrap）1
---
1. 解决了内容页中没有内容，页脚显示在页面中间。引入了新的css，页脚始终在页面底部。

2. 使用container样式，这是使用bootstrap必须的类，将这个页面包装成一个“容器”。

## 博客前端优化（bootstrap）2
---
1. 优化header，使用navbar-fixed类将头部导航固定在页面顶部

2. 使用dropdown生成下拉列表，将热门标签的内容放在里面。

3. 修改小细节提高页面在其他设备上访问的美观性

## 博客前端优化（bootstrap）3
---
1. 优化right，改变热门点击和推荐阅读的样式使用table类将其表格化。

2. 优化搜索框的显示

## 博客前端优化（bootstrap）4
---
1. 优化article，使用bootstrap的栅格系统，合理划分页面。

2. 使用lable，将元素做成标签的样式

## 博客前端优化（bootstrap）5
---
1. 优化search，使用panel标签，做成面板样式，使得显示更突出

2. 使用panel-success等标签显示特定情境的面版


