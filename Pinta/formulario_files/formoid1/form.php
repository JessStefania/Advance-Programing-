<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', '
Successful registration');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-dark.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-dark.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-dark" style="background-color:#aaaaff;font-size:14px;font-family:'Palatino Linotype','Book Antiqua',Palatino,serif;color:#34495E;max-width:450px;min-width:150px" method="post"><div class="title"><h2>Register New User</h2></div>
	<div class="element-number<?php frmd_add_class("number1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" min="0" max="10000014" name="number1" required="required" placeholder="id_user" value=""/><span class="icon-place"></span></div></div>
	<div class="element-name<?php frmd_add_class("name"); ?>"><label class="title"><span class="required">*</span></label><span class="nameFirst"><input placeholder="Name First" type="text" size="8" name="name[first]" required="required"/><span class="icon-place"></span></span><span class="nameLast"><input placeholder="Name Last" type="text" size="14" name="name[last]" required="required"/><span class="icon-place"></span></span></div>
	<div class="element-password<?php frmd_add_class("password"); ?>" title="string"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="password" name="password" value="" required="required" placeholder="Password"/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select" required="required">

		<option value="Coorp">Coorp</option>
		<option value="CoorpX">CoorpX</option>
		<option value="CoorpY">CoorpY</option></select><i></i><span class="icon-place"></span></span></div></div></div>
<div class="submit"><input type="submit" value="
To register"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-dark.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>