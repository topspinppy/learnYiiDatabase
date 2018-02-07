<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body style="font-family: 'Kanit', sans-serif;">
	<?php
		echo CHtml::openTag('div', array('class' => 'bs-navbar-top-example'));
		$this->widget(
			'booster.widgets.TbNavbar',
			array(
				'type' => 'inverse',
				'brand' => 'Database Student Yii School',
				'brandOptions' => array('style' => 'width:auto;margin-left: 0px;'),
				'fixed' => 'top',
				'fluid' => true,
				'htmlOptions' => array('style' => 'position:absolute'),
				'items' => array(
					array(
						'class' => 'booster.widgets.TbMenu',
						'type' => 'navbar',
						'items' => array(
							array('label' => 'หน้าหลัก', 'url' => 'index.php', 'active' => true),
							array('label' => 'เพิ่มข้อมูลนักเรียน', 'url' => 'index.php?r=Site/Form')
						)
					)
				)
			)
		);
		echo CHtml::closeTag('div');
	?>

  <div class="jumbotron">
  <div class="container">
	<br>
    <h1>จัดการข้อมูลนักเรียน</h1> 
    <p>โรงเรียน Yii ศึกษา | Yii Schools</p> 
	</div>
  </div>
	

<div class="container">

	<?php echo $content; ?>

</div>

</body>
</html>
