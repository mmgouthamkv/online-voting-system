<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {background-image:url("Indian_flag.jpg");background-repeat:no-repeat;background-size:cover;font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.checkbox{
 cursor: pointer;}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="api/login.php" method="POST" style="max-width:500px;margin:auto">
  <h1>Online voting system</h1>
  <h2>Login</h2>


  <div class="input-container">
    <i class="fa fa-user-circle icon"></i>
    <input class="input-field" type="number" placeholder="Number/e-mail" name="mob" required>
  </div>



  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" name="pass" placeholder="Enter password " id="myInput" required>
  </div>
  <input class="checkbox" type="checkbox" onclick="showpswrd()" cursor:"pointer";>Show Password<br>
  <br>

<div class="input-container">
<select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br> 
</div>


  <button type="submit" class="btn">Login</button>
  <p>Not a user?</p>
  <a href="routes/register.php">Sign up </a>
</form>

<script>
function showpswrd(){
	var x=document.getElementById("myInput");
	if(x.type === "password") {
		x.type="text";
	}
	else{
	x.type = "password";
	}
}
</script>

</body>
</html>
