<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//FR"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<title><?php $this->lang('defaut_titre') ; $this->lang('titre_page')?></title>
		<link rel="shortcut icon" href="<?php echo IMG_HTTP; ?>favicon.png" type="image/x-icon" />
		<link rev="start" href="<?php echo ROOT_HTTP; ?>" title="Accueil" />
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_HTTP; ?>defaut.css">
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_HTTP; ?>jquery.css">
		<script type="text/javascript" src="<?php echo JS_HTTP; ?>jquery/jquery.js"></script>
		<script type="text/javascript" src="<?php echo JS_HTTP; ?>jquery/jqueryui.js"></script>
		<?php $this->head(); ?>
	</head>
	<body>
		<!-- DIV DE CHARGEMENT AJAX ASYNC -->
		<div id="_ajaxLoading"></div>
		<!-- DIV D'ERREUR AJAX -->
		<div id="_ajaxError"><p><?php $this->lang('ajax_error')?></p></div>
		<!-- DIV DU CONTENU -->
		<div id="_content">
			<?php $this->incView(); ?>
		</div>
	</body>
</html>