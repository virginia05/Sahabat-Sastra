<!DOCTYPE html>
<html>
<head>
	<title>Selamat datang di SahabatSastra</title>
</head>

<style type="text/css">
	table{
		border: 1px #f2f4f4;
		background-color: #f2f4f4 ;
		padding: 0 10px 10px 10px;
		margin: 150px;
	}
	
</style>
<body style="background-image: url('p2.webp'); background-size: 100%;">
<center>
	<form action="proseslogin.php" method="POST">
	<table>
		<tr>
			<td>
				<center>
				<h2 font color="black" face="calibri">Login Admin<br></h2>
				</center>
				<font color="black" face="calibri">Username <br>
					<input type="text" size="40" name="username" placeholder="Nama pengguna atau email">
				</font>
			</td>
		</tr>

		<tr>
			<td>
				<font color="black" face="calibri">Password <br>
					<input type="password" size="40" name="password" placeholder="Kata Sandi">
				</font>
			</td> 
		</tr>

		<tr>
			<td>
			<center>
				<br>
				<button type="submit" style="background-color:tan; width:270px; height:30px;">Login</button>
				<br><br>
				<button type="reset" style="background-color:gray; width:270px; height:30px;">Reset</button><br><br>
				<a href="index.php" id="about">Home</a>
				
			</center>
			</td>
		</tr>
	</table>
	</form>
</center>
<footer style="color:white; text-align: center;" > &copy; Copyrighted virginia_novera</footer>
</body>
</html>