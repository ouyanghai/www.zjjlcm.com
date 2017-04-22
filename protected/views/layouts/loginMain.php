<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app']; ?>/css/login.css" />
	<script type="text/javascript" src="<?php echo $this->assets['app']; ?>/js/jquery.min.js"></script>	
</head>
<body>
<?php
echo $content;
?>
</body>
</html>