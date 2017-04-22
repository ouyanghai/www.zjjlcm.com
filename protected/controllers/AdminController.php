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
				array('label' => '增加用户', 'url' => '/admin/adduser'),
				array('label' => '用户列表', 'url' => '/admin/userlist'),
			),
		);
	}
	public function actionIndex()
	{
		$this->render('userlist');
	}

	public function actionUserList(){
		$criteria = new CDbCriteria;
		$criteria->select = 'id,username,created,updated';
		if(!empty($_POST['id'])){
			$criteria->addCondition('id='.$_POST['id']);
		}
		if(!empty($_POST['username'])){
			$criteria->addSearchCondition('username',$_POST['username']);
		}
		$dataProvider = new CActiveDataProvider('User',array(
				'criteria' => $criteria,
				'pagination' => array('pageSize'=>20,'pageVar'=>'page'),
			));

		$this->render('userlist',array(
			'data'=>$dataProvider->getData(),
			'pages' => $dataProvider->getPagination(),
		));
	}

	//用户管理
	public function actionAddUser(){
		$this->render('adduser');
	}
	//用户管理处理修改的ajax请求
	public function actionAddPass(){
		if(!empty($_POST)){
			$command = Yii::app()->db->createCommand();
			$sql = "select * from {{user}} where username like '{$_POST['username']}'";
			$row = $command->setText($sql)->queryRow();
			if(!empty($row)){
				$this->redirect("userlist");
				exit;
			}else{
				if(empty($_POST['password'])){
					$this->render('adduser');
					exit;
				}
				$command = Yii::app()->db->createCommand();
				$username = $_POST['username'];
				$password = $_POST['password'];
				$created = date('Y-m-d H:i:s');
				$updated = date('Y-m-d H:i:s');
				$email = "a@b.com";

				$sql = "insert into `app_user` (username,password,created,updated,email) values('{$username}','{$password}','{$created}','{$updated}','{$email}')";
				$res = $command->setText($sql)->execute();
				if($res >0){
					$this->redirect('userlist');
					exit;
				}
			}
		}
		$this->redirect('userlist');
	}
	//用户管理处理删除的ajax请求
	public function actionDel(){
		//ajax处理
		if(isset($_POST['id'])){
			/*
			$sql = 'delete from {{user}} where id=:id';
			$command = Yii::app()->db->createCommand();
			$command->setText($sql);
			$row = $command->execute(array(':id'=>$_GET['id']));
			*/
			$row = User::model()->deleteByPk($_POST['id']);
			if($row){
				echo json_encode('ok');
			}
		}
		echo false;
	}
	//用户列表
	public function actionGetUserInfo(){
		$this->layout = '//layouts/blank';
		if(isset($_GET['id'])){
			$data = User::model()->findByPk($_GET['id']);
			$this->render('userInfo',array('data'=>$data));	
		}
	}
	
	public function actionManage(){
		if(isset($_POST['User']['id'])){
			$model = User::model()->findByPk($_POST['User']['id']);
			$model->attributes = $_POST['User'];
			$model->updated = date('Y-m-d H:i:s');
			//print_r($_POST);exit;
			if($model->save()){
				echo 'ok';
			}else{
				echo false;
			}
		}else{
			echo '服务器没接收到数据';
		}
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