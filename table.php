<?php
$index_list = range(1,12);
$item_list = array();
if(!empty($_POST)){
	$item_list = $_POST['item'];


}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>HTML</title>
		<meta name="description" content="" />
		<meta name="author" content="Administrator" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<style type="text/css">
		*{ margin: 0;padding: 0;}
		table.option_table .item{ width:30px;}
		table.result_table,table.option_table{ border-collapse: collapse; margin: 10px;}
		table.result_table td,table.result_table th,table.option_table td,table.option_table th{ width:50px;padding: 10px;text-align: center;}
		
		</style>
	</head>

	<body>
		
		<form action="table.php" method="post">
			<h1>选项</h1>
			<table border="1" cellspacing="0" cellpadding="0" class="option_table">
				<tr>
				<?php foreach ($index_list as $key=>$value): ?>
					<th><?php echo $key+1?></th>
				<?php endforeach ?>
				</tr>
				<tr>
				<?php foreach ($index_list as $key=>$value): ?>
					<td><input type="text" name="item[]" value="" id="" class="item"/></td>
				<?php endforeach ?>
				</tr>
			</table>
			<input type="submit" name="is_submit" value="提交" id="is_submit"/>
		</form>
		
		
		<?php if(!empty($_POST)){?>
		<h1>结果</h1>
		<?php echo str_repeat('<br />',3)?>
		<table border="1" cellspacing="0" cellpadding="0" class="result_table">
			<tr>
			<?php foreach ($item_list as $key=>$value): ?>
				<th><?php echo $key+1?></th>
			<?php endforeach ?>
			</tr>
			<tr>
			<?php foreach ($item_list as $key=>$value): ?>
				<td><?php echo $value;?></td>
			<?php endforeach ?>
			</tr>
		</table>
		<?php }?>
		<?php echo str_repeat('<br />',3)?>
		
		
	</body>
</html>
