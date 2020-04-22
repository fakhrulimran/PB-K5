<!DOCTYPE html>
<html>
<head>
  <title>SISTEM KALKULATOR</title>
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
  background-color: white;>
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
  background-color: #808000;
}

.active {
  background-color: #ff5286 ;
}
div {
  background-color: #ffeb7a;
  width: 300px;
  border: 15px grey;
  padding: 50px;
  margin: 20px;
}
</style>
</head>
 <body bgcolor="#ffeb7a">

<center>
  <img src="kalkulator.jpg" width="1000" height="350"  align="bottom">
</center>
<center><div id = "header">

               <marquee><p><b>SELAMAT DATANG KE SISTEM KALKULATOR</b></p></marquee>
        </div></center>
         </div></center>
        <center><button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p></center>
  <ul>
  <li><a  href="index.php">Laman Utama</a></li>
  <li><a href="kira.php">Kalkulator</a></li>
  <li><a class="active" href="logout.php">Log Keluar</a></li>
</ul>
<br>
<br>
<center>
<? php  
session_start();
session_destroy();
echo"Anda sudah log keluar!<br>
<br>
<a href=login.html>Laman Utama</a>
<br>
<br>
</center>
<center><p>Assalammualaikum, <br>
                           TERIMA KASIH KERANA MENGGUNAKAN SISTEM SAYA.<br>SEMOGA KITE BERJUMPA LAGI.</p>
                      <p>Sekian wabillahhitaufiq wa hidayah asslammualaikum warahmatullahi wabarakatuh.</p></center>

</center>
</body>
</html>
