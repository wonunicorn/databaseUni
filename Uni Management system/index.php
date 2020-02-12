<!DOCTYPE html>
<html>
<head>
	<title> UNIVERSITY </title>
	<meta charset = "utf-8">
	<link href = "1.css" rel = "stylesheet" type="text/css"/>

</head>
<body>
  
	<div id = "block1">
	
        <form method="post" action="user.php">
    
    <div class="group">
		<label> Username </label>
		<br/>
    <input id="username" placeholder = "Username.." name="username" id="username" type="text" class="input" onkeyup="this.value = this.value.replace(/[^a-z0-9_-]/g, '')">
<div id="result"></div>
		<br/>
		
    </div>
    <div class="group">
		<label> Password </label>
		<br/>
    <input id="password" placeholder = "Password.." name="password" type="password" class="input" data-type="password" onkeyup="this.value = this.value.replace(/[^A-Za-z0-9]/g, '')">
		<br/>
    </div>
    <div class="group">
		 <input type='submit' name='submit' value='Submit'>
		<br/>
    </div>
      <a href = "lost.php"> Lost password? </a>
		<!--  <a href = "reg.php"> Lost password? </a>-->
		<br/>

	</form>
</div>

<div class = "rectangle"> </div>
</body>
</html>
