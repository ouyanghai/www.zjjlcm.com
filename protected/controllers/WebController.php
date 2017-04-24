<?php
class WebController extends TopController{
	public $menu =array();
	public function init(){
		parent::init();
		$this->layout = "//layouts/web";
		$this->menu = array(
			array("label"=>"首页","url"=>$this->createUrl('index'),"class"=>"current","id"=>""),
			array("label"=>"特价游","class"=>"hongs","id"=>"","url"=>$this->createUrl('tejia')),
			array("label"=>"全景游","class"=>"hongs","id"=>"","url"=>$this->createUrl('view')),
			array("label"=>"景点图库","class"=>"","id"=>"","url"=>$this->createUrl('pic')),
			array("label"=>"旅游攻略","class"=>"","id"=>"","url"=>$this->createUrl('strategy')),
		);
		
	}

	public function actionCompany(){
		$act = $_GET['act']=="about"? "about" : "connect";
		$this->render("company",array('act'=>$act));
	}

	public function actionTejia(){
		$this->render("tejia");
	}
	
	public function actionView(){
		$this->render("view");
	}

	public function actionPic(){
		$this->render("pic");
	}

	public function actionStrategy(){
		$this->render("strategy");
	}

	public function actionIndex(){
		$this->render("index");
	}

}

?>