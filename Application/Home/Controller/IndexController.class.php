<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    //成员管理
    public function index(){

        $this->display();
   
    }
    //后台登录
    public function login(){
        // if(session('admin')){
        //     $this->redirect('./user');
        // }
        $data['account']=I('account');
        $res=M('user')->where($data)->find();
        if(!$res)$this->error('账号未注册');
        if($res['password']==I('password')){
            session('admin',$res['name']);
            session('uid',$res['id']);
            $this->success('登录成功','./user');
        }else{
            $this->error('密码错误，登录失败');
        }
    }
    //后台退出登录
    public function loginout(){
        session('admin','');
        $this->success('退出成功','./index');
    }

    public  function user(){

    $list=M('user')->order('id desc')->select();

    $this->assign('list',$list);
     $this->display();
    }
    public  function anjian(){
    $map['id']=session('uid');
    $list=M('user')->where($map)->order('id desc')->select();

    $this->assign('list',$list);
     $this->display();
    }

    public function pingjia(){
    	// $map['uid']=session('uid');
        $list=M('user')->where($map)->order('id desc')->select();

    $this->assign('list',$list);
     $this->display();
    }
    //添加成员
    public function adduser(){
        $this->display();
    }
    //管理员界面
    public function manager(){
    $list=M('admin')->order('id desc')->select();

    $this->assign('list',$list);
    	$this->display();
    } 
    //增加管理员界面
    public function addmanager(){
    	$this->display();
    }
    //产品分类界面
    public function product_category(){
        $list=M('category')->select();
      
        $this->assign('list',$list);
        $this->display();
    }
    //添加产品分类界面
    public function add_product_category(){
        $map['pid']=0;
        $list=M('category')->where($map)->select();
        $this->assign('list',$list);
        $this->display();
    }
    //产品界面
    public function product(){
        $count      = M('goods')->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $list=M('goods')->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $category=M('category')->getField('id,name');

        foreach ($list as $key => $value) {
            $list[$key]['category']=$category[$value['type']];
            $list[$key]['date']=date('Y-m-d H:i:s',$value['addtime']);
        }

        $this->assign('list',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    //添加产品界面
    public function addproduct(){
        $list=M('category')->where($map)->select();
        $this->assign('list',$list);
        $this->display();
    }
    //文章列表
    public function article_category(){
        $this->display();
    }
    //增加文章界面
    public function addarticle(){
        $this->display();
    }

    //添加用户
    public function adduserinfo(){
        $data=M('user')->create();
        $repassword=I('repassword');
        if($data['password']!=$repassword){
            $this->error('两次输入的密码不对');
        }
        $res=M('user')->add($data);
        if($res){
            $this->success('添加成功');
        }
    }
        //添加管理员
    public function addmanegerinfo(){
        $data=M('admin')->create();
        $repassword=I('repassword');
        if($data['password']!=$repassword){
            $this->error('两次输入的密码不对');
        }
        $res=M('admin')->add($data);
        if($res){
            $this->success('添加成功');
        }
    }
    //展示用户信息
    public function userinfo(){
        $id=I('id');
       $map['id']=$id;
       $list=M('user')->where($map)->find();
       $this->assign('list',$list);
       $this->display();
    }
        //展示用户信息
    public function managerinfo(){
        $id=I('id');
       $map['id']=$id;
       $list=M('admin')->where($map)->find();
       $this->assign('list',$list);
       $this->display();
    }
    //更新用户信息
    public function updateuserinfo(){
        $data=$_POST;
        $res=M('user')->save($data);
        if($res){
            $this->success('更改成功','Index/user');
        }else{
            $this->error('更改失败','Index/user');
        }
    }
        //更新用户信息
    public function updatemanagerinfo(){
        $data=$_POST;
        $res=M('admin')->save($data);
        if($res){
            $this->success('更改成功','Index/manager');
        }else{
            $this->error('更改失败','Index/manager');
        }
    }
    //删除用户信息
    public function deluserinfo(){
        $map['id']=I('id');
        $res=M('user')->where($map)->delete();
        if($res){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
       //删除用户信息
    public function delmanagerinfo(){
        $map['id']=I('id');
        $res=M('admin')->where($map)->delete();
        if($res){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    //添加分类
    public function add_category(){
        $data=$_POST;
        $res=M('category')->add($data);
        if($res){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
       
    }
        //删除用户信息
    public function delcategory(){
        $map['id']=I('id');
        $res=M('category')->where($map)->delete();
        if($res){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
//添加商品
    public function addgoods(){

    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
    $upload->savePath  =     ''; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();

    $data=$_POST;
    $data['img']=$info['img']['savepath'].$info['img']['savename'];
    $data['addtime']=time();

    $res=M('goods')->add($data);
    if($res){
        $this->success('添加成功');
    }else{
        $this->error('添加失败');
    }
    }
    //商品信息
    public function goodsinfo(){
        $map['id']=I('id');
        $list=M('goods')->where($map)->find();
        $category=M('category')->select();
        $this->assign('category',$category);
        $this->assign('list',$list);
        $this->display();
    }

    //更改商品信息
    public function updategoods(){
        $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
    $upload->savePath  =     ''; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();
    $data=$_POST;
    if($info){
        $data['img']=$info['img']['savepath'].$info['img']['savename'];
    }     
    $data['addtime']=time();
    $res=M('goods')->save($data);
    if($res){
        $this->success('修改成功','product');
    }else{
        $this->error('添加失败');
    }
    }
    //删除商品
    public function delgoods(){
        $map['id']=I('id');
        $res=M('goods')->where($map)->delete();
        if($res){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    public function addanjian(){
        $id=I('id');
        $this->assign('uid',$id);
        $this->display();
    }
       public function addpingjia(){
        $id=I('id');
        $this->assign('uid',$id);
        $this->display();
    }
    public function addanjianinfo(){
        $data=$_POST;
        M('anjian')->add($data);
        $this->success('添加成功');

    }
       public function addpingjiainfo(){
        $data=$_POST;
        $data['statu']=1;
        M('pingjia')->add($data);
        $this->success('添加成功');

    }
    public function anjianshow(){
        $data['uid']=I('id');
        $list=M('anjian')->where($data)->select();
        foreach ($list as $key => $value) {
            if($value['statu']==0){
                $list[$key]['type']='未完成';
            }else{
                $list[$key]['type']='已完成';
            }
        }
       $this->assign('list',$list);
       $this->display();

    }

    public function pingjiashow(){
        $data['uid']=I('id');
        $list=M('pingjia')->where($data)->select();
        foreach ($list as $key => $value) {
            if($value['statu']==0){
                $list[$key]['type']='上级评价';
            }else{
                $list[$key]['type']='同级评价';
            }
        }
       $this->assign('list',$list);
       $this->display();
    }

    public function delpingjia(){
        $data['id']=I('id');
        M('pingjia')->where($data)->delete();
        $this->success('删除成功');
    }
    public function delanjian(){
        $data['id']=I('id');
        M('anjian')->where($data)->delete();
        $this->success('删除成功');
    }
    public function tousu(){
    	$map['uid']=session('uid');
        $list=M('toushu')->where($map)->select();
        $user=M('user')->getField('id,name');
        foreach ($list as &$key) {
            $key['name']=$user[$key['uid']];
            $key['time']=date('Y-m-d H:i:s',$key['addtime']);
        }
        $this->assign('list',$list);
        $this->display();
    }

      public function qiandao(){
    	$map['uid']=session('uid');
        $list=M('qiandao')->where($map)->select();
        $user=M('user')->getField('id,name');
        foreach ($list as &$key) {
            $key['name']=$user[$key['uid']];
            $key['time']=date('Y-m-d H:i:s',$key['addtime']);
        }
        $this->assign('list',$list);
        $this->display();
    }
    public function finanjian(){
    	$data['id']=I('id');
    	$data['statu']=1;
    	M('anjian')->save($data);
    	$this->success('案件已完成');
    }
    public function addqiandao(){
    	$data['uid']=session('uid');
    	$data['addtime']=time();
    	M('qiandao')->add($data);
    	$this->success('签到成功');
    }
    public function toushu2(){

        $list=M('user')->order('id desc')->select();

    $this->assign('list',$list);
     $this->display();
    
    }
    public function addtoushu(){
    	$data['uid']=I('id');
    	$data['addtime']=time();
    	M('toushu')->add($data);
    	$this->success('投诉成功');
    }
}