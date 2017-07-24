<?php
namespace Home\Controller;
use Home\Controller\SiteController;
/**
 * 站点首页
 */

class IndexController extends SiteController {

	/**
     * 主页
     */
    public function index(){
    	//MEDIA信息
        $media=$this->getMedia();
    	$this->assign('media', $media);
        $only = I('get.title');
        if(!empty($only)){
            $where = array();
            $where['only'] = $only;
            $info = D('Article/ContentArticle');
            $list = $info->getWhereInfo($where);
            $this->assign('list', $list);
        }
        $baoxiu = D('baoxiu');
        $bxtype = $baoxiu->select();
        $this->assign('bxtype', $bxtype);
        $this->siteDisplay(C('TPL_INDEX'));
    }

    /**
     * @return 提交信息
     */
    public function add()
    {
        $upload = new \Think\Upload();// 实例化上传类
        if(I('post.aid')){
            $faq['aid'] = I('post.aid');
            $user['aid'] = I('post.aid');
        }
        $img_type = array('jpg','gif','png','jpeg');
        $video_type = array('mov','mp4');
        $audio_type = array('m4a','mwv');
        $faq['num'] = I('post.num');
        $faq['xinghao'] = I('post.xinghao');
        $faq['xuliehao'] = I('post.xuliehao');
        $faq['type'] = I('post.type');
        $faq['endtime'] = strtotime(I('post.endtime'));
        $user['name'] = I('post.name');
        $user['tel'] = I('post.tel');
        $user['email'] = I('post.email');
        $user['weixin']= I('post.weixin');
        $faq['staue']= I('post.staue');
        $faq['content']= I('post.content');
        $upload->maxSize   =     3145728;// 设置附件上传大小
        $upload->saveName = array('uniqid','');//设置保存名字唯一
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','mov','mp4','m4a','mwv');// 设置附件上传类型
        $upload->rootPath  = 'Uploads/files/'; // 设置附件上传根目录
        // 上传单个文件
        foreach ($_FILES as $key=>$value){
            if($value['error'] == 0){
                $myfiles = $_FILES[$key];
            }
        }
    
        $info   =   $upload->uploadOne($myfiles);
        //报修类型
        $baoxiu = D('baoxiu');
        $bxtype = $baoxiu->select();
        foreach ($bxtype as $list){
            if($faq['staue'] == $list['id']){
                $baoxiu_name = $list['name'];
            }
        }
    
        //
        if($faq['type']==1){
            $customer = '自己设备';
        }else{
            $customer = '直接报修';
        }
        $body = "项目编号:".$faq['num']."<br/>"."设备编号:".$faq['xinghao']."<br/>"."设备序列号:".$faq['xuliehao']."<br/>"."质保到期时间:".I('post.endtime')."<br/>"."报修类型:".$baoxiu_name."<br/>"."客户性质:".$customer."<br/>"."<hr><br/><h1>用户信息</h1>"."联系人:".$user['name']."<br/>"."联系电话:".$user['tel']."<br/>"."联系人邮箱:".$user['email']."<br/>"."联系人微信:".$user['weixin']."<br/>"."问题描述:".$faq['content']."<br/>";
        if(in_array($info['ext'],$video_type)){
            $faq['video'] = $upload->rootPath.$info['savepath'].$info['savename'];
            $result = think_send_mail(C('THINK_EMAIL.EMAIL_TO'),'凯贤','报修详情',$body,$faq['video'],$myfiles['name']);
        }elseif(in_array($info['ext'],$img_type)){
            $faq['image'] = $upload->rootPath.$info['savepath'].$info['savename'];
            $result = think_send_mail(C('THINK_EMAIL.EMAIL_TO'),'凯贤','报修详情',$body,$faq['image'],$myfiles['name']);
        }elseif(in_array($info['ext'],$audio_type)){
            $faq['sound'] = $upload->rootPath.$info['savepath'].$info['savename'];
            $result = think_send_mail(C('THINK_EMAIL.EMAIL_TO'),'凯贤','报修详情',$body,$faq['sound'],$myfiles['name']);
        }
        $faq_list = D('faq');
        $faq_stau = $faq_list->add($faq);
        $user['fid'] = $faq_stau;
        $user_list = D('user');
        $user_list->add($user);
        if($faq_stau){
            $this->success('提交成功，我们会尽快跟您联系！',U('index'));
        }

    }
}