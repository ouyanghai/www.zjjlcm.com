<?php

class AdminController extends Controller
{
	public $menu = array();

	public function init(){
		parent::init();
		$this->layout='//layouts/admin';
		$this->menu = array(
			array(
				'title' => '用户管理',
				'id' => 'admin/user',				
				array('label' => '修改用户', 'url' => '/admin/user/mod'),
				array('label' => '用户列表', 'url' => '/admin/user/index'),
			),
			array(
				'title' => '说说管理',
				'id' => 'admin/speak',				
				array('label' => '发表说说', 'url' => '/admin/speak/post'),
				array('label' => '说说列表', 'url' => '/admin/speak/index'),
			),
			array(
				'title' => '相册管理',
				'id' => 'admin/album',
				array('label' => '创建相册', 'url' => '/admin/album/create'),
				array('label' => '相册信息', 'url' => '/admin/album/index'),
				array('label' => '添加照片', 'url' => '/admin/album/add'),
				array('label' => '照片信息', 'url' => '/admin/album/picindex'),
			),

		);
	}
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionLogin(){
		$this->layout = '//layouts/loginMain';
		$model = new User;
		if(isset($_POST['User']) && !empty($_POST['User'])){	
			$model->attributes = $_POST['User'];
			if($model->login()){
				echo json_encode('1');exit;
			}else{
				echo json_encode('用户名或密码错误');exit;
			}
		}
		$this->render('login',array('model'=>$model));
	}

	public function actionLogout(){
		Yii::app()->user->logout();
		$this->redirect('login');
	}

	public function filters(){
		return array(
			'auth - login'
		);
	}
}