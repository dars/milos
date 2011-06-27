<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.fancybox-1.3.4.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
	<script type="text/javascript">var base_url = "<?php echo Yii::app()->request->baseUrl?>/";</script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/jquery-ui-1.8.13.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/jquery.fancybox-1.3.4.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/ckeditor/adapters/jquery.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'最新消息', 'url'=>array('/news/'), 'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'Blog分享', 'url'=>array('/blog/'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'整形手術', 'url'=>array('/plastic/'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'醫學美容', 'url'=>array('/cosmetics/'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'常見問題', 'url'=>array('/qanda/'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->

	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); ?><!-- breadcrumbs -->

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by 迪傑工作室.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>