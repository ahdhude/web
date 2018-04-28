<?php

 include('C:\Users\ahdhu\github\web\dbConfig.php');

if(isset($_POST["AtollId"]) && !empty($_POST["AtollId"])){

  $query = $db->query("SELECT * FROM island WHERE Atoll_AtollId = ".$_POST['AtollId']." ");
  $rowCount = $query->num_rows;


  if($rowCount > 0){

    echo '<option value="">Select Island</option>';

    while($row = $query->fetch_assoc()){

      echo '<option value="'.$row['IslandId'].'">'.$row['IslandName'].'</option>';

    }

    }else{

      echo '<option value="">Island not available</option>';

    }
  }



 ?>
