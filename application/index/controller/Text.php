<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Config;
class Text
{
    public function index()
    {
    	#使用sql语法查询数据库
    	// $res = Db::query("select *from tp_user where id=?", [1]);
    	//dump(Db::connect());
    	//插入sql
   	    //$res = Db::execute("insert into tp_user set name=?,password=?,email=?",[
			// '夏铭',
			// md5('123456'),
			// '123456@qq.com'
        //]);
        //返回空数组array(0)
        //$res = Db::table('tp_user')->where([
			// 'id' => '100'
        //])->select();
        //返回 null     
   //      $res = Db::table('tp_user')->where([
			// 'id' => '100'
   //      ])->find();
   //    返回一个字符串
    	// $res = Db::table('tp_user')->value('name');
    	// 返回一个数组
    	// $res = Db::table('tp_user')->column('name');
    	// dump($res2);
    	//$res = DB::connect("mysql://username:pass@127.0.0.1:3306/tpfive_sql#utf-8");
    	$res = Db::connect(

    		);

    	dump($res);
    }

    public function insert(){
    	$db = Db::name('user');
    	// #insert 返回插入影响行数1
    	// $res = $db->insert([
    	// 	'name' => '哒哒',
    	// 	'password' => md5('123456'),
    	// 	'email' => '12345@qq.com'

    	// 	]);

    	// #insertGetId返回 id
    	// $res = $db->insertGetId([
    	// 	'name' => '哒哒',
    	// 	'password' => md5('123456'),
    	// 	'email' => '12345@qq.com'

    	// 	]);
    	$data = array();
    	for($i=0;$i<10;$i++){
    		$data[] = ['name' => '哒哒'.$i,
				      'password' => md5('123456'),
				      'email' => '12345@qq.com'
				      ];
    	}
    	//返回插入条数10条
    	$res = $db->insertAll($data);
    	dump($res);
    }
}
