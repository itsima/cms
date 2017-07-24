<?php
/**
 * Created by PhpStorm.
 * User: ITsima
 * Date: 2017/6/28
 * Time: 17:41
 */
namespace Article\Controller;
use Admin\Controller\AdminController;

class AdminUserInfoController extends AdminController{
    /**
     * 当前模块参数
     */
    protected function _infoModule(){
        return array(
            'info'  => array(
                'name' => '客户信息管理',
                'description' => '管理网站的客户信息',
            ),
            'menu' => array(
                array(
                    'name' => '客户信息列表',
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
        $list = D('user')->limit($p,10)->order('id desc')->select();
        $count = D('user')->count();
        $limit = $this->getPageLimit($count,10);
        $this->assign('page',$this->getPageShow());
        $this->assign('list',$list);
        $this->adminDisplay('index');
    }

    /**
     * @return edit
     */
    public function edit()
    {
        $id = I('get.id');
        $faq = D('user');
        $list = $faq->where('id ='.$id)->find();
        $shebei = D('content');
        $result = $shebei->where('content_id ='.$list['aid'])->find();
        if($result){
            $this->assign('shebei',$result);
        }
        $this->assign('info',$list);
        $this->assign('shebei',$result);
        $this->adminDisplay('info');

    }
      public function del()
    {
        $id = I('post.data',0,'intval');;
        $faq = D('user');
       if($faq->where('id='.$id)->delete()){
         $this->success('客户信息删除成功！');
       }
    }
}