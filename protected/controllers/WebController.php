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
		$command = Yii::app()->db->createCommand();
		$sql = "select id,title,pic,started,days from `app_line`";
		$res = $command->setText($sql)->queryAll();
		$num = count($res);
		$this->render("tejia",array('num'=>$num,'data'=>$res));
	}

	public function actionLine(){
		$id = $_GET['id'];
		$command = Yii::app()->db->createCommand();
		$sql = "select * from `app_line` where id={$id}";
		$res = $command->setText($sql)->queryRow();
		$this->render("line",array('data'=>$res));
	}
	
	public function actionView(){
		$this->render("view");
	}

	public function actionPic(){
		$this->render("pic");
	}

	public function actionStrategy(){
		$command = Yii::app()->db->createCommand();
		$sql = "select * from `app_strategy` order by created desc";
		$result = $command->setText($sql)->queryAll();
		$this->render("strategy",array('data'=>$result));
	}

	public function actionArticle(){
		$id = !empty($_GET['id']) && is_numeric($_GET['id']) && $_GET['id']>0 ? $_GET['id'] : 1;
		$command = Yii::app()->db->createCommand();
		$sql = "select * from `app_strategy` where id={$id}";
		$result = $command->setText($sql)->queryRow();
		$pid = $id-1;
		$nid = $id+1;
		$prev = $command->setText("select id,name from `app_strategy` where id={$pid}")->queryRow();
		$next = $command->setText("select id,name from `app_strategy` where id={$nid}")->queryRow();
		if(empty($prev)){
			$prev = "";
		}
		if(empty($next)){
			$next = "";
		}
		$this->render("article",array('data'=>$result,'prev'=>$prev,'next'=>$next));
	}

	public function actionIndex(){
		$this->render("index");
	}

}

?>