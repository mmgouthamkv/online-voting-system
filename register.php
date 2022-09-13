<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Online Voting System-Registration</title>
<style>
body{
  font-family: Arial, Helvetica, sans-serif;
  padding: 25px;
  background: url(jets.jpg);
  background-repeat:no-repeat;
  background-size:cover;
  boarder-positioning:center;
}

.select {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
 
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 5px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 5px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

.btn {
  background-color: dodgerblue;
  color: white;
  padding: 5px 5px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="../api/register.php" method='POST' enctype="multipart/form-data" style="max-width:500px;margin:auto">
	<h1>Online Voting System</h1>
	<h2>Register</h2>

	<div class="input-container">
	<i class="fa fa-user-circle icon"></i>
	<input class="input-field" type="text" placeholder="name" name='name' required>
	</div>

	<div class="input-container">
	<i class="fa fa-envelope icon"></i>
	<input class="input-field" type="number" placeholder="Mobile" name="mob" required>
	</div>


	<div class="input-container">
	<i class="fa fa-key icon"></i>
	<input class="input-field" type="password" placeholder="password" name="pass" id="password" minlength="8" required>
	</div>

	<div class="input-container">
	<i class="fa fa-key icon"></i>
	<input class="input-field" type="password" placeholder="confirm_password" name="cpass" id="confirm_password" required>
	<input type="checkbox" onclick="showpswrd()">show password
	</div>

	<div class="input-container">
	<i class="fa fa-address-book icon"></i>
	<input class="input-field" type="text" placeholder="Address" name="add" required>
	</div>

	<div class="input-container">
	<i class="fa fa-file-photo-o icon"></i>
	<input class="input-field" type="file" placeholder="photo" name="image" id="profile" required>
	</div>

	<div class="select">
	<select class="select" type="sell" name="role">
	<option>1.Voter</option>
	<option>2.Group</option>
	</select>
	</div><br>
	
        <button type="submit" name="registerbtn" class="btn" onclick="validatePassword()">Register</button>
        Already user?<a href="../">Login here</a>
    </form>

<script src="showpswrd.js" type="text/javascript"></script>
<script src="validpassword.js" type="text/javascript"></script>

</body>
</html>