<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="en">

<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
</head>

<body>
	<!-- Menu główne -->
	<?php
	$labelS = "";
	if (isset(Yii::app ()->user->SubjN)) {
		$labels = array(
				'polski' => 'Język polski',
				'matematyka' => 'Matematyka',
		);
		$labelS = $labels[Yii::app ()->user->SubjN];
	}
			
	$this->widget ( 'booster.widgets.TbNavbar', array (
			'type' => null,
			'brand' => 'E-Dziennik',
			'brandUrl' => array (
					'/site/index' 
			),
			'collapse' => true, // requires bootstrap-responsive.css
			'fixed' => false,
			'fluid' => true,
			'items' => array (
					array (
							'class' => 'booster.widgets.TbMenu',
							'type' => 'navbar',
							'items' => array (
									array (
											'label' => 'O stronie',
											'url' => array (
													'/site/page',
													'view' => 'about' 
											) 
									),
									array (
											'label' => 'Kontakt',
											'url' => array (
													'/site/contact' 
											) 
									),
									array (
											'label' => 'Oceny',
											'url' => array (
													'/uczniowie'
											),
											'visible' => ! Yii::app ()->user->isGuest && ! Yii::app ()->user->isTeacher
									),
									array (
											'label' => $labelS,
											'url' => array (
													'/'.Yii::app ()->user->SubjN
											),
											'visible' => Yii::app ()->user->isTeacher
									)
							) 
					),
					array (
							'class' => 'booster.widgets.TbMenu',
							'type' => 'navbar',
							'htmlOptions' => array (
									'class' => 'pull-right' 
							),
							'items' => array (
									array (
											'label' => 'Zaloguj',
											'url' => array (
													'/site/login' 
											),
											'visible' => Yii::app ()->user->isGuest 
									),
									array (
											'label' => 'Wyloguj ('.Yii::app ()->user->name.')',
											'url' => array (
													'/site/logout' 
											),
											'visible' => ! Yii::app ()->user->isGuest 
									) 
							) 
					) 
			) 
	) );
	?>
		<?php echo $content; ?>
	<hr>
	<footer class="container-fluid text-center small">
  		Copyright &copy; <?php echo date('Y'); ?> by TSz.<br />
		Wszelkie prawa zastrzeżone.<br />
		<?php echo Yii::powered(); ?>
	</footer>
	<!-- footer -->
</body>
</html>
