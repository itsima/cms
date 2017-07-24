<?php
namespace DuxCms\Controller;
use Admin\Controller\AdminController;
/**
 * 站点统计
 */

class AdminStatisticsController extends AdminController {
    /**
     * 当前模块参数
     */
    protected function _infoModule(){
        return array(
            'info'  => array(
                'name' => '站点统计',
                'description' => '网站综合统计信息',
                ),
            'menu' => array(
                    array(
                        'name' => '访问统计',
                        'url' => U('index'),
                        'icon' => 'list',
                    ),
                    array(
                        'name' => '蜘蛛统计',
                        'url' => U('spider'),
                        'icon' => 'list',
                    ),
                ),
            );
    }
	/**
     * 访问统计
     */
    public function index(){
        $breadCrumb = array('访问统计'=>U());
        $this->assign('breadCrumb',$breadCrumb);
        $this->assign('jsonArray1',D('TotalVisitor')->getJson(7,'day','m-d'));
        $this->assign('jsonArray2',D('TotalVisitor')->getJson(30,'day','m-d'));
        $this->assign('jsonArray3',D('TotalVisitor')->getJson(12,'month','Y-m'));
        $this->adminDisplay();
    }
    /**
     * 蜘蛛统计
     */
    public function spider(){
        $breadCrumb = array('蜘蛛统计'=>U());
        $this->assign('breadCrumb',$breadCrumb);
        $this->assign('jsonArray1',D('TotalSpider')->getJson(7,'day','m-d'));
        $this->assign('jsonArray2',D('TotalSpider')->getJson(30,'day','m-d'));
        $this->assign('jsonArray3',D('TotalSpider')->getJson(12,'month','Y-m'));
        $this->adminDisplay();
    }





}

