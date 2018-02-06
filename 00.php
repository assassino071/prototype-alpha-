<!DOCTYPE html>
<html>
<head>
	<title>vmLinuz</title>
</head>
<style type="text/css">

	body{
background-color: rgb(0, 0, 77);

	}
p {
    border: 2px solid rgb(102, 0, 255);
    border-radius: 5px;
margin: 10px 100px 5px 50px;
width: 179px;
}
form {
	position: centred;
}
h4{
color: white;
margin: 2px 50px 5px 100px;
width: 179px;
}
form {
margin-top: 10px;
		margin-right: 100px;
		margin-bottom: 10px;
		margin-left: 0px;
		width: 300px
}

</style>
<body >
<h1 style="color:white;">welcome to prototype </h1> <h6 style="color:white;">made by mohamed isaac</h6>
<form method="post" action="prototype.php ">
	<fieldset>
		<legend style="color:white">already subscribed</legend>
		<p style="color: white">usernam :<input type="text" name="usernam"></p>
		<p style="color: white">password : <input type="password" name="password"></p>
			<input type="submit" value="submit" style="margin:2px 50px 5px 100px" >
			<input type="reset" >
	</fieldset>
</form>

<form style="position: right">
	<fieldset>
		<legend style="color: white">new user</legend>
		<p style="color: white">first name  :<input type="text" name="usernam"></p>
		<p style="color: white">last name :<input type="text" name="usernam"></p>
		<p style="color: white">usernam :<input type="text" name="usernam"></p>
		<p style="color: white">e-mail  <input type="email" name="email"></p>

		<p style="color: white">password : <input type="password" name="password"></p>

		<p style="color: white">repet password : <input type="password" name="password"></p>
		 <input type="radio" name="gender" value="male" checked style="margin:2px 50px 5px 100px"> Male
  <input type="radio" name="gender" value="female"> Female
		<h4>select filier : </h4>
<input list="filier" style="margin:2px 50px 5px 100px">
  <datalist id="filier">
    <option value="1ere math informatique">
    <option value="license math ">
    <option value="master math">
    <option value="license informatique">
    <option value="master informatique">
    </datalist>
<input type="submit" value="submit" style="margin:2px 50px 5px 100px" >
			<input type="reset" >    	

	</fieldset>
</form>
</body>
</html>
