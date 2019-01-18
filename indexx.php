<!DOCTYPE html>
<head>
          
        <title>BB OOP</title>
  
</head>
<body>
  <form method="post" action="">
  
   <table align="center">

<tr>
  <center><b>Kalkulator BB</b></center>
    <td><input type="text" name="BeratBadan" size="10" placeholder="Berat Badan"></td> <br>
    <tr><td><input type="text" name="Tinggi" size="10" placeholder="Tinggi Badan"></td></tr> 
    <td><input type="radio" name="jk" size="10" placeholder="Perempuan">Perempuan</td> 
    <td><input type="radio" name="jk" size="10" placeholder="Laki-Laki"> Laki-Laki</td>
   
    <tr><td><input type="submit" name="send" value="Hitung"></td></tr>
      
    </tr>
</table>
</form>
</br>
  <center>
  <?php
   include "BMI.php";

   $nilai = new BMI;
   

   if (isset($_POST['send'])){
    $nilai -> BB_ideal($_POST['Tinggi'],$_POST['BeratBadan'], $_POST['jk']);

    echo $nilai -> BB_ideal();

   }

  ?>
  </center>
</body>
  
</html>