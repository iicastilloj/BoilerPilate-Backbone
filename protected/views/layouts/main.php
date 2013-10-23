<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/style.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<script>
	var backbone = {
		baseUrlDeveloper: "<?php echo Yii::app()->baseUrl ?>/js/src/"
	}
	</script>
<div class="container" id="page">
	<div class="row">
		<div class="clo-md-12">
			<?php echo $content; ?>
		</div>
	</div>
<script src="<?php echo Yii::app()->baseUrl ?>/js/lib/require.min.js" data-main="<?php echo Yii::app()->baseUrl ?>/js/src/js/app"></script>
</body>
</html>
