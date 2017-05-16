<?php
class WebController extends TopController{
	public $menu =array();
	//客服固定超链接
	public $connect_link = "http://byt.zoosnet.net/LR/Chatpre.aspx?id=BYT51845438&lng=cn";
	//客服系统需要的js
	public $link_js = "http://byt.zoosnet.net/JS/LsJS.aspx?siteid=BYT51845438&float=1&lng=cn";
	public function init(){
		header("content-type:text/html; charset=utf-8");
		parent::init();
		$this->layout = "//layouts/web";
		$this->menu = array(
			array("label"=>"首页","url"=>$this->createUrl('index'),"class"=>"current","id"=>""),
			array("label"=>"特价游","class"=>"hongs","id"=>"","url"=>$this->createUrl('tejia')),
			array("label"=>"全景游","class"=>"hongs","id"=>"","url"=>$this->createUrl('view')),
			//array("label"=>"景点图库","class"=>"","id"=>"","url"=>$this->createUrl('pic')),
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
		$result = array();
		foreach ($res as $key => $value) {
			$num = preg_match("/\d+/", $value['days'],$arr);
			if(!$num || $arr[0]<4){
				array_push($result, $res[$key]);
			}
		}
		$num = count($result);
		$this->render("tejia",array('num'=>$num,'data'=>$result));
	}

	public function actionLine(){
		$command = Yii::app()->db->createCommand();
		$sql = "";
		$res = "";
		if(isset($_GET['line'])){
			$line = intval($_GET['line']);
			$sql = "select * from `app_line` limit {$line},1";	
			$res = $command->setText($sql)->queryRow();
			if(empty($res)){
				$sql = "select * from `app_line` limit 0,1";	
				$res = $command->setText($sql)->queryRow();
			}
		}else if(!empty($_GET['id'])){
			$id = intval($_GET['id']);
			$sql = "select * from `app_line` where id={$id}";	
			$res = $command->setText($sql)->queryRow();
		}
		
		$this->render("line",array('data'=>$res));
	}
	
	public function actionView(){
		$command = Yii::app()->db->createCommand();
		$sql = "select id,title,pic,started,days from `app_line`";
		$res = $command->setText($sql)->queryAll();
		$result = array();
		foreach ($res as $key => $value) {
			$num = preg_match("/\d+/", $value['days'],$arr);
			if($num && $arr[0]>3){
				array_push($result, $res[$key]);
			}
		}
		$num = count($result);
		$this->render("view",array('num'=>$num,'data'=>$result));
	}

	public function actionPic(){
		$command = Yii::app()->db->createCommand();
		$page = !empty($_GET['page'])&&is_numeric($_GET['page']) ?$_GET['page'] : 1;
		$page  = $page > 0 ? $page : 1;
		$size = 10;
		$pages = $command->setText("select id from `app_strategy`")->queryAll();
		$pages = ceil(count($pages)/$size);
		$page = $page >$pages ? $pages : $page;

		$start = ($page-1)*$size;
		
		$sql = "select * from `app_strategy` order by created desc limit {$start},{$size}";
		$result = $command->setText($sql)->queryAll();
		
		$this->render("pic",array('data'=>$result,'pages'=>$pages,'page'=>$page));
	}

	public function actionStrategy(){
		$command = Yii::app()->db->createCommand();
		$page = !empty($_GET['page'])&&is_numeric($_GET['page']) ?$_GET['page'] : 1;
		$page  = $page > 0 ? $page : 1;
		$size = 10;

		$pages = $command->setText("select id from `app_strategy`")->queryAll();
		$pages = ceil(count($pages)/$size);
		$page = $page >$pages ? $pages : $page;
		
		$start = ($page-1)*$size;
		
		$sql = "select * from `app_strategy` order by created desc limit {$start},{$size}";
		$result = $command->setText($sql)->queryAll();
		
		$this->render("strategy",array('data'=>$result,'pages'=>$pages,'page'=>$page));
	}

	public function actionArticle(){
		$command = Yii::app()->db->createCommand();
		$result = "";
		if(isset($_GET['line'])){
			$line = $_GET['line'];
			$result = $command->setText("select * from `app_strategy` limit {$line},1")->queryRow();	
			if(empty($result)){
				$result = $command->setText("select * from `app_strategy` limit 0,1")->queryRow();	
			}
		}
		if(!empty($_GET['id'])){
			$id = !empty($_GET['id']) && is_numeric($_GET['id']) && $_GET['id']>0 ? $_GET['id'] : 1;
			$sql = "select * from `app_strategy` where id={$id}";	
			$result = $command->setText($sql)->queryRow();	
		}
		
		$pid = $result['id']-1;
		$nid = $result['id']+1;
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