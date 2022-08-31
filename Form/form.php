<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Üçe Bölüm</title>
</head>
<body>
    <form action="bolum.php" class="form-inline" method="get">
    
    <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control m-4" name="sayi" id="sayi" placeholder="Lütfen bir sayı giriniz">
    <button type="submit" class=" btn btn-sm btn-primary ">Kontrol Et</button>

</div>
</form>

<?php 

 @ $sayi=$_GET["sayi"];
if($sayi%3==0){
    echo " 
    
    <div class='alert alert-success' role='alert'>
  $sayi üçe tam bölünüyor.
</div>
    
    
    
    
    ";
}else{
    echo "
    <div class='alert alert-danger' role='alert'>
   $sayi üçe bölünmüyor. Bölünebilecek en yakın sayı: "
    .($sayi+(3-($sayi%3))) . "
</div>";
    
    
  
    
}

?>
</body>
</html>