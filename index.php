<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <h1>Loop PHP</h1>
    <?php 
      // --------Pengulangan------
      // for(variabelawal(mulai); batas(syarat); perubahan)

      $hewan = ['Anjing','Babi','Cicak','Domba','Buaya'];

      // --------- 1) for loop --------
      // for($i = 0; $i < 5; $i++){
      //   echo "------------------";
      //   echo "Skolah Coding $i";
      //   echo "------------------<br>";
      //   echo "<br>"
      //   for($i = 0; $i < count($hewan) -1 ; $i++){
      //   echo "------------------";
      //   echo $hewan[$i];
      //   echo "------------------<br>";
      // }

      // --------- 2) foreach ----------
      // foreach($hewan as $h){
      //    echo "------------------";
      //   echo $h;
      //   echo "------------------<br>";
      // }
      // $data = ['Nama' => 'Hilman',
      //          'Umur' => 24,
      //          'Sifat' => 'Malas'];
      //   foreach($data as $key => $value){
      //     echo $key."  :  ".$value . "<br>";
          
        // }

      // -----------while & do while-----
      // while(syarat)
      $i = 0;
      // while($i < count($hewan)){
      //   echo $hewan[$i]."<br>";
      //     $i++;
      // }
      do{
        echo "*";
        echo $hewan[$i]."<br>";
        $i++;
      }while($i < count ($hewan));
      ?> 
</body>

</html>
