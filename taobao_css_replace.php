<?php
//模块名字
$module_name = '.tshop-um-test ';
$show = false;
$input_css = '';
$result = '';
if(!empty($_POST)){
	$show = true;
	$input_css = $_POST['css'];
	$result = preg_replace('/^\s*(\..+)/m', $module_name."$1", $input_css);
	$result = preg_replace('/,\s*(.+)/m', ','.$module_name."$1", $result);
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>淘宝装修替换sample的css</title>
</head>

<body>

<form action="" method="post">

<textarea name="css" cols="100" rows="20"><?php echo $input_css;?></textarea>
<br />
<input name="" type="submit" value="submit" />
</form>

<?php if($show){
	echo '<pre>';
	echo $result;
}?>




</body>
</html>
