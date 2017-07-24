<?php
/**
 * Created by PhpStorm.
 * User: ITsima
 * Date: 2017/6/28
 * Time: 17:41
 */
namespace Article\Controller;
use Admin\Controller\AdminController;

class AdminUserController extends AdminController{
    /**
     * 当前模块参数
     */
    protected function _infoModule(){
        return array(
            'info'  => array(
                'name' => '客户报修管理',
                'description' => '管理网站的客户报修',
            ),
            'menu' => array(
                array(
                    'name' => '客户报修列表',
                    'url' => U('index'),
                    'icon' => 'list',
                ),

            ),
        );
    }

    /**
     * @return index
     */
    public function index()
    {
        $p = I("get.p");
        $p = $p -1;
        $p = $p*10;
        $list = D('faq')->limit($p,10)->order('id desc')->select();
        $count = D('faq')->count();
        $limit = $this->getPageLimit($count,10);
        $this->assign('page',$this->getPageShow());
        $statu = D('baoxiu')->select();
        $this->assign('list',$list);
        $this->adminDisplay('index');
    }

    /**
     * @return edit
     */
    public function edit()
    {
        $id = I('get.id');
        $faq = D('faq');
        $user = D('user');
        $user_info = $user->where('fid ='.$id)->find();
        $statu = D('baoxiu')->select();
        $list = $faq->where('id ='.$id)->order('id desc')->find();
    
        foreach ($statu as $key=>$value){
            if($value['id'] = $list['staue']){
                $list['staue'] = $value['name'];
            }
        }
        if($list['aid'] == 0){
        $this->assign('info',$list);
        }else{
            $content = M('content');
        $con = $content->where('content_id = '.$list['aid'])->order('content_id desc')->find();
        $info = array_merge($list,$con);
        $this->assign('info',$info);
        }
        $this->assign('user',$user_info);
        $this->adminDisplay('info');

    }
     public function del()
    {
        $id = I('post.data',0,'intval');;
        $faq = D('faq');
       if($faq->where('id='.$id)->delete()){
         $this->success('客户报修列表删除成功！');
       }
    }
}