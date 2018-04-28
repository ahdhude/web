<!-- *****************THIS LOADS CONTENTS INTO FIELDS AND DIVS***************
*********************************************************************** -->
<?php
include ('php/connect.php');


// LOADS ATOLL SELECT FIELD



function fill_atoll($connect)
{
  $output='';

  $sql="SELECT * FROM atoll";
  $result=mysqli_query($connect,$sql);

  while($row=mysqli_fetch_array($result))
  {
    $output .='<option value="'.$row["AtollId"].'">'.$row["AtollName"].'</option>';

  }

  return $output;

mysqli_close($connect);
}













?>
