<?php
@session_start();
/*a list of all tenants available/adding and deleting them
 */
include 'display.php';
@include '../modules/functions.php';
@date_default_timezone_set("Africa/Nairobi");

echo  $htmlheaders;
 $property=  getSettings();
echo '<head><title>Property Manager |'.$property['company_name'].'</title>';
echo $meta;
//echo $javascript;
echo '<link rel="stylesheet" type="text/css" media="screen" href="'.$baseurl.'css/overall2.css" />';
echo '<script src="'.$baseurl.'/js/jquery.ui.sortable.js" type="text/javascript"></script>';

echo $jquery;
//later set variable to session
$admin='<u>'.$_SESSION['username'].'</u>';


?>

<script>
$(function() {
	$( "#menu" ).menu();
});

var propid;
</script>
<script src="../js/logout.js"></script>

<style>
.ui-menu { width: 150px;
}
</style>
 <?php 

echo '</head><body>';
echo '<div id="form1">';
echo '<h2>'.$wheat.$spacer.$logopath.$property['company_name'].' | Property Manager <span style="color:black"><img src="../images/cursors/agent.png"> '.findpropertybyid($_SESSION['propertyid']).'</span><div id="loggedin">'.$loggedin.' '.$admin.' | '.$clock.' '.$time.'</div>'.$endwheat.'</h2>' .'<hr/>'; 
echo $wheat.'&nbsp;&nbsp;'.$endwheat;
echo '<table><tr><td>';
echo $sidebar;
echo '</td><td>&nbsp;&nbsp;</td><td>';
echo '<fieldset class="fieldsettenants">';

echo '<legend><b>TENANT LISTING</b></legend>';
require('../tables/edittenant.php');
echo '</fieldset>';
echo '</body>';
?>

