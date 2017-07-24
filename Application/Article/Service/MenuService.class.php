<?php
namespace Article\Service;
/**
 * 后台菜单接口
 */
class MenuService{
	/**
	 * 获取菜单结构
	 */
	public function getAdminMenu(){
		return array(
            'Content' => array(
                'menu' => array(
                    array(
                        'name' => '设备管理',
                        'icon' => 'reorder',
                        'url' => U('Article/AdminContent/index'),
                        'order' => 1
                    ),
                    array(
                        'name' => '二维码管理',
                        'icon' => 'code',
                        'url' => U('Article/AdminErweima/index'),
                        'order' => 2
                    ),
                    array(
                        'name' => '客户报修管理',
                        'icon' => 'reorder',
                        'url' => U('Article/AdminUser/index/p/1'),
                        'order' => 3
                    ),
                    array(
                        'name' => '客户信息管理',
                        'icon' => 'user',
                        'url' => U('Article/AdminUserInfo/index/p/1'),
                        'order' => 4
                    ),
                )
            ),
        );
	}
	


}
