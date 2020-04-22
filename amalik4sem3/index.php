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
  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #1aa3ff;
}

.active {
  background-color: #ff5286 ;
}
div {
  background-color: #ff9999;
  width: 300px;
  border: 15px black;
  padding: 50px;
  margin: 20px;
}
</style>
</head>
 <body bgcolor ="turquoise" >

  
  <center>
  <img src="kalkulator.jpg" width="1000" height="350"  align="bottom">
  </center>
<center><div id = "header">

               <marquee><p><b>SELAMAT DATANG KE SISTEM KALKULATOR</b></p></marquee>
        </div></center>
        <center><button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p></center>
  <ul>
  <li><a class="active" href="index.php">Laman Utama</a></li>
  <li><a href="kira.php">Kalkulator</a></li>
  <li><a href="logout.html">Log Keluar</a></li>
</ul>
<br>
<center><p>Assalammualaikum, <br>
                           HALAMAN UTAMA BAGI SISTEM KALKULATOR.</p>
                      <p>Semoga anda ceria-ceria selalu.</p></center>
<form action="kira.php" method="post">
<center><div>
  <center><strong><h3><u>Login</u></h3></strong></center><br>
<center>
  
  Username: <input type="text"name="username"size="20"/><br>
  <br>
  Password: <input type="password"name="password"size="10"/><br>
  <br>
<input type='submit' name='log in'value='submit'><br>
<br>
<a href="signup.php"target="top"value="sign up">"Sign Up"</a><br>
</br>
</div></center>
</center>
</form>

</body>

</html>
