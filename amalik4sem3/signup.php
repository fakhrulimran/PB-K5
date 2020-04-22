<!DOCTYPE html>
<html>
<head>
<title>Sistem Kalkulator</title>
<script>
    // Function to change webpage background color
    function changeBodyBg(color){
        document.body.style.background = color;
    }
   
</script>
</head>
 <body bgcolor="#ff99e6">
 	<center>
    <img src="kalkulator.jpg" width="1000" height="350"  align="bottom">
    </center>

<center>
	<p><h3><strong><center>Register</center></strong></h3><br>
	<br>
	 </div></center>
        <center><button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p></center>
	<br> 	
		<center><form id="form"name="form"method="post"action="pros_signup.php">
			<table width="400" border="1">
			
				<tr>
					<th scope="col">Username:</th>
					<th scope="col"><div align="left">
					<input type="text" name="username"value=""size="50"/>
				</div>
			</th>
		</tr>
		<tr>
					<th scope="col">Password:</th>
					<th scope="col"><div align="left">
					<input type="text" name="password"value=""size="50"/>
				</div>
			</th>
		</tr>
		
	</table></form></center>
	<br>
	<center><a href="index.php" button type="submit"value="submit"> Hantar</a></button>
		<button type="reset"value="reset">Isi Semula</button>
	</br>
</form>
</br>
</br>
<a href="index.php"target="-top">Kembali</a><br>
</center>
</form>
</p>

</center>
<center>

        <label>What colour do you love? :</label>
        <button type="button" onclick="changeBodyBg('#00ffbf');">Terqoise</button>
        <button type="button" onclick="changeBodyBg('#99ccff');">Light blue</button>
        <button type="button" onclick="changeBodyBg('#9966ff');">Light Purple</button>
         <button type="button" onclick="changeBodyBg('#ff0000');">Red</button>
        <button type="button" onclick="changeBodyBg('#ffcc99');">Pitch</button>
    
<script type="text/javascript"><?php echo $bgimage_session."();"; ?></script>
</center>
</body>
</html>
