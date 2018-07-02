<?php
$ii = 0;
$nummy = 0;
$theName= array();
$nameArray = array();
require_once("georgiaConnection.php");
//$get_data = mysql_query("SELECT * FROM candidates WHERE last_name='$lastname'",);
$get_data = mysql_query("SELECT * FROM georgia" , $connection);
		if (!$get_data) { die("Database query failed: " . mysql_error());}
while ($rows = mysql_fetch_array($get_data)) {
    $name =  $rows['name'];
   // echo $name."<br>";
    $ii += 1;
   array_push($theName,$name);
   // first line activates when there is a name change

  if ($name != $theName[0]  && $ii > 0) {
      array_push($nameArray,$theName[0]); //pushes very first name to a new array
      unset ($theName);
     $theName= array(); //clears the array of names
  //  array_push($theName,$name)  ;
      $ii = 0;
$nummy += 1;
        //adds the very last name called back to theName array
     echo $name."<br>";
      echo $nummy;
      var_dump($nameArray);
  break;} 
	
}
//  echo $nameArray[0]."<br>";
  //  echo $theName[1]."<br>";
echo count($nameArray);
//$output = 0;
while ($output < count($nameArray)){
 echo $nameArray[$output]."<br>";
    $output += 1;
}

echo "<br><br>".$nummy;
//var_dump($nameArray);
//$thelast = count($theName) - 1;
//echo $theName[$thelast];
//echo "<br> ".$thelast;
//	echo $rows['name']." -        - ".$rows['chemical']."<br>";
?>


