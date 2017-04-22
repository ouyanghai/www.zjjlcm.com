<?php

class User extends CActiveRecord{

	private $_identity;
	static public function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return '{{user}}';
	}

	public function __construct(){

	}

	public function attributeLabels(){
		return array(
			'username'=>'用户名:',
			'password'=>'密&nbsp;&nbsp;码:'
		);
	}

	public function rules(){
		return array(
			array('username,password','required'),
			array('qq,email,tel,username','safe'),
			//array('password','pwdValidate','message'=>'pwd wrong')
		);
	}

	public function pwdValidate(){
	}

	public function login(){
		if($this->_identity ===null){
			$this->_identity = new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode == UserIdentity::ERROR_NONE){
			Yii::app()->user->login($this->_identity);
			return true;
		}else{
			return false;	
		}
		
	}
	
}

?>