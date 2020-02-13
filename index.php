<?php 
include('header.php');
?>
<body>
<br>
<br>
<div class="container">
    <div class="row-fluid">
	<form class="form-horizontal" method="POST">
    <div class="control-group">
    <label class="control-label" for="inputEmail">Username</label>
    <div class="controls">
    <input type="text" id="inputEmail" name="username" placeholder="Username" required>
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
    <input type="password" id="inputPassword" name="password" placeholder="Password" required>
    </div>
    </div>
    <div class="control-group">
    <div class="controls">

    <button  id="h-default-trigger" name="login" type="submit" class="btn btn-info">Sign in</button>
    </div>
    </div>
    </form>	
 
	<?php
	
	if (isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	$query=mysql_query("select * from user where username='$username' and password='$password'")or die(mysql_error());
	$count=mysql_num_rows($query);
	
	if ($count > 0){
	header('location:progressbar.php');
	}
	
	}
	
	
	?>
	


       
 
    </div>
</div>
</body>
</html>