<?php
if(isset($_GET['exe']))
{
	if($_GET['exe']=='singup')
	{
		include('view-singup.php');
	}
	else if($_GET['exe']=='panel')
	{
		include('view-panel.php');
	}

	else
	{
		include('view-login.php');
	}
}
else {
	include('view-login.php');
}

?>