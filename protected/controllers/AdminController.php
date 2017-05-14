<?php

class AdminController extends Controller
{
	public $menu = array();

	public function init(){
		header("content-type:text/html; charset=utf-8"); 
		parent::init();
		$this->layout='//layouts/admin';
		$this->menu = array(
			array(
				'title' => '用户管理',
				'actions' => 'adduser,userlist',
				array('label' => '增加用户', 'url' => '/admin/adduser'),
				array('label' => '用户列表', 'url' => '/admin/userlist'),
			),
			/*
			array(
				'title' => '城市攻略',
				'actions' => 'createcity,citylist',
				array('label' => '增加城市' ,'url' =>'/admin/createcity'),
				array('label' => '城市列表','url'=>'/admin/citylist'),
			),
			*/
			array(
				'title' => '攻略文章',
				'actions' => 'addarticle,articlelist',
				array('label' => '增加文章' ,'url' =>'/admin/addarticle'),
				array('label' => '文章列表','url'=>'/admin/articlelist'),
			),
			array(
				'title' => '旅游路线',
				'actions' => 'addline,linelist',
				array('label' => '增加路线' ,'url' =>'/admin/addline'),
				array('label' => '路线列表','url'=>'/admin/linelist'),
			),
		);
	}
	public function actionIndex()
	{
		$this->redirect('/admin/userlist');
	}

	public function actionAddLine(){
		$this->render("addline");
	}
	public function actionModLine(){
		$id = $_GET['id'];
		$command = Yii::app()->db->createCommand();
		$sql = "select * from `app_line` where id='{$id}'";
		$result = $command->setText($sql)->queryRow();
		$this->render("addline",array('data'=>$result));
	}

	public function actionDelLine(){
		$id = $_POST['id'];
		$command = Yii::app()->db->createCommand();
		$sql = "delete from `app_line` where id='{$id}'";
		$num = $command->setText($sql)->execute();
		if($num>0){
			echo json_encode(true);
			exit;
		}
		echo json_encode(false);
	}

	public function actionLineList(){
		$command = Yii::app()->db->createCommand();
		$sql = "select id,title from `app_line`";
		$result = $command->setText($sql)->queryAll();
		$this->render("linelist",array('data'=>$result));
	}

	public function actionDoPostLine(){
		$params = "(";
		$values = "(";
		foreach ($_POST as $key => $val) {
			if($val!=""){
				$params .= $key.",";
				if($key=='introduce' ||$key=='include' ||$key=='uninclude' ||$key=='notice'){
					$val = htmlspecialchars($val);
				}
				if($key == 'price'){
					$values .= "{$val},";	
				}else{
					$values .= "'{$val}',";	
				}
			}
		}	
		$pic = $this->uploadFile('line');
		if(empty($pic)){
			Yii::app()->user->setFlash('uploadFile','文件上传失败!');
			$this->redirect('/admin/addline');
			exit;
		}
		$pic = $pic[0];
		$updated = date('Y-m-d H:i:s',time());
		$created = date('Y-m-d H:i:s',time());
		$params .= "pic,updated,created)";
		$values .= "'{$pic}','{$updated}','{$created}')";
		$command = Yii::app()->db->createCommand();
		$sql = "insert into `app_line`{$params} values {$values}";
		$command->setText($sql)->execute();
		$this->redirect('/admin/linelist');
	}
	public function actionDoModLine(){
		$params = "";
		foreach ($_POST as $key => $val) {
			if($key!="id"){
				if($key=='introduce' ||$key=='include' ||$key=='uninclude' ||$key=='notice'){
					$val = htmlspecialchars($val);
				}
				$params .= "{$key}='{$val}',";
			}
		}	
		$pic = $this->uploadFile('line');
		if($pic==false){
			//Yii::app()->user->setFlash('uploadFile','文件上传失败!');
			//$this->redirect('/admin/addline');
			//exit;
			$pic = "";
		}else{
			$pic = $pic[0];	
		}
		$id = $_POST['id'];
		$updated = date('Y-m-d H:i:s',time());
		if($pic == ""){
			$params .= "updated='{$updated}'";
		}else{
			$params .= "pic='{$pic}',updated='{$updated}'";	
		}
		$command = Yii::app()->db->createCommand();
		$sql = "update `app_line` set {$params} where id='{$id}'";
		$command->setText($sql)->execute();
		$this->redirect('/admin/linelist');
	}

	public function actionAddArticle(){
		$this->render("addarticle");
	}

	public function actionDelArticle(){
		$id = $_POST['id'];
		$command = Yii::app()->db->createCommand();
		$sql = "delete from `app_strategy` where id={$id}";
		$num = $command->setText($sql)->execute();
		if($num>0){
			echo json_encode(true);
			exit;
		}
		echo json_encode(false);
		exit;
	}

	public function actionArticleList(){
		$command = Yii::app()->db->createCommand();
		$sql = "select id,name,updated from `app_strategy`";
		$result = $command->setText($sql)->queryAll();
		$this->render("articlelist",array('data'=>$result));
	}

	public function actionDoPostArticle(){
		$command = Yii::app()->db->createCommand();
		$params = "(";
		$values = "(";
			
		$pic = $this->uploadFile('article');
		if(empty($pic) && empty($_POST['id'])){
			Yii::app()->user->setFlash('uploadFile','文件上传失败!');
			$this->redirect('/admin/addarticle');
			exit;
		}

		$updated = date('Y-m-d H:i:s',time());
		if(!empty($_POST['id'])){
			$id = $_POST['id'];
			if($pic==false){
				$pic = "";
			}else{
				$pic = "pic='{$pic}',";
			}
			$content = htmlspecialchars($_POST['content']);
			$name = $_POST['name'];
			$sql= "update `app_strategy` set {$pic} name='{$name}',content='{$content}',updated='{$updated}' where id={$id}";
			$command->setText($sql)->execute();
			$this->redirect('/admin/articlelist');
			exit;
		}

		$pic = $pic[0];
		foreach ($_POST as $key => $val) {
			if($val!=""){
				$params .= $key.",";
				if($key=='content'){
					$val = htmlspecialchars($val);
				}
				$values .= "'{$val}',";
			}
		}

		$created = date('Y-m-d H:i:s',time());
		$params .= "pid,pic,updated,created)";
		$values .= "0,'{$pic}','{$updated}','{$created}')";
		
		$sql = "insert into `app_strategy`{$params} values {$values}";
		$command->setText($sql)->execute();

		$this->redirect('/admin/articlelist');
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
				$this->redirect("/admin/userlist");
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
					$this->redirect('/admin/userlist');
					exit;
				}
			}
		}
		$this->redirect('/admin/userlist');
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
		$this->redirect('/admin/login');
	}

	public function actionCreateCity(){
		if(empty($_POST['title'])){
			$this->render("createcity");
			exit;
		}
		$command = Yii::app()->db->createCommand();
		$name = $_POST['title'];
		$now = date('Y-m-d H:i:s');
		$sql = "insert into `app_city`(name,created) values('{$name}','{$now}')";
		$num = $command->setText($sql)->execute();
		$data = '';
		if($num>0){
			echo json_encode("true");
			exit;
		}else{
			echo json_encode("false");
			exit;
		}
	}
	
	public function actionCityList(){
		$command = Yii::app()->db->createCommand();
		$sql = "select id,name,created from `app_city` order by id";
		$res = $command->setText($sql)->queryAll();
		$this->render("citylist",array("data"=>$res));
	}

	public function actionDelcity(){
		if(empty($_POST['id'])){
			echo json_encode(false);
			exit;
		}
		$id = $_POST['id'];
		$command = Yii::app()->db->createCommand();
		$sql = "delete from `app_city` where id='{$id}'";
		$res = $command->setText($sql)->execute();
		if($res>0){
			echo json_encode(true);
			exit;
		}
		echo json_encode(false);
	}

	public function actionModcity($id){
		if(empty($_GET['id'])){
			$this->redirect("admin/citylist");
			exit;
		}
		$id = $_GET['id'];
		$command = Yii::app()->db->createcommand();
		$sql = "select * from `app_city` where id='{$id}'";
		$res = $command->setText($sql)->queryRow();
		if(empty($res)){
			$this->redirect("/admin/citylist");
			exit;	
		}
		$this->render("modcity",array("data"=>$res));
	}

	public function actionModArticle($id){
		if(empty($_GET['id'])){
			$this->redirect("admin/articlelist");
			exit;
		}
		$id = $_GET['id'];
		$command = Yii::app()->db->createcommand();
		$sql = "select * from `app_strategy` where id='{$id}'";
		$res = $command->setText($sql)->queryRow();
		if(empty($res)){
			$this->redirect("/admin/articlelist");
			exit;	
		}

		$this->render("addarticle",array("data"=>$res));
	}
	public function actionDoModArticle(){
		if(empty($_POST)){
			echo json_encode(false);
			exit;
		}
		$id = $_POST['id'];
		$name = $_POST['name'];
		$command = Yii::app()->db->createCommand();
		$sql = "update `app_city` set name='{$name}' where id='{$id}'";
		$num = $command->setText($sql)->execute();
		if($num>0){
			echo json_encode(true);
			exit;
		}
		echo json_encode(false);
	}
	public function actionDoModcity(){
		if(empty($_POST)){
			echo json_encode(false);
			exit;
		}
		$id = $_POST['id'];
		$name = $_POST['title'];
		$command = Yii::app()->db->createCommand();
		$sql = "update `app_city` set name='{$name}' where id='{$id}'";
		$num = $command->setText($sql)->execute();
		if($num>0){
			echo json_encode(true);
			exit;
		}
		echo json_encode(false);
	}

	public function filters(){
		return array(
			'auth - login'
		);
	}
}