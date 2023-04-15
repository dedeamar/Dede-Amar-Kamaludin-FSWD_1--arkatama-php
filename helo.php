
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Php Dasar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
<?php
$bio = 'BIODATA Saya';
$nama ='Dede Amar Kamaludin';
$Studi = 'Universitas Alma ata';
$Jurusan ='Sistem Informasi';



echo "<left>";
echo "</br>";
echo "<b><font> <Size=50>$bio</font></b>";
"</br></br>";
echo "Perkenalkan Nama Saya <b>$nama</b>";
echo "<left>";

?>
    <style>
body {
    background-color: aliceblue;
}        
.box {
    margin: 200px;
    height: 300px;
    width: 600px;
    background-color: #ccc;
}
.atas {
    height: 300px;
    width: 600px;  
   
}
h1{
    text-align: center;
}
.kanan {
    height:400px;
    width: 200px;
    float: right;
}

</style>
<div class="atas">
<div class="box">
<h1>BIODATA</h1> <hr>

    <pre>Nama             :Dede Amar Kamaludin<hr></pre>
    <pre>Alamat           :Bogor<hr></pre>
    <pre>Universitas      :Universitas Alma ata<hr></pre>
    <pre>Jurusan          :Sistem Informasi<hr></pre> 
    </div>
    
    <div class="kiri">
    <div class="kanan">

   </div>
</div>
    
</body>
</html>