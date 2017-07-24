<?php
return array(
	//'配置项'=>'配置值'
	'APP_SYSTEM' => true,
	'APP_NAME' => '前台基础类',
    'THINK_EMAIL' =>array(
    'SMTP_HOST'   => 'smtp.163.com', //SMTP服务器
    'SMTP_PORT'   => 25, //SMTP服务器端口
    'SMTP_USER'   => '13831156019@163.com', //SMTP服务器用户名
    'SMTP_PASS'   => 'hao123456', //SMTP服务器密码
    'FROM_EMAIL'  => '13831156019@163.com', //发件人EMAIL
    'FROM_NAME'   => '凯贤流体', //发件人名称
    'EMAIL_TO'    => 'baiyunhao2352@dingtalk.com',//接受邮箱
    'EMAIL_SUBJECT' => '',//邮件主题
    'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
    'REPLY_NAME'  => '', //回复名称（留空则为发件人名称）
)
);