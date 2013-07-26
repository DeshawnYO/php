<?php


mysql_connect('localhost','root','');
mysql_select_db('cms');

$table = 'cms_position_data';
$sql = "show columns from ".$table;
$query = mysql_query($sql);
$field_list = array();
while($row=mysql_fetch_assoc($query)){
	$field_list[] = $row['Field'];
}

////////////////////////重点////////////////////////
function get_field_string($field_list){
	$string_array = array();
	foreach ($field_list as $field_value) {
		$string_array[$field_value] = '';
	}
	return var_export($string_array,true);
}


$result = get_field_string($field_list);
echo '<pre>';print_r($result);exit;
