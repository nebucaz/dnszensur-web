<?php
header('Content-Type: application/json');

include ("../include/db_connect.php"); /* stellt db verbindung her */

$ergebnis = mysqli_query($db, "SELECT domain, last_update_swisscom, last_update_upc, zensur_status_swisscom, zensur_status_upc FROM domains WHERE zensur_status_swisscom LIKE '1' OR zensur_status_swisscom LIKE '2' OR zensur_status_swisscom LIKE '3' OR zensur_status_swisscom LIKE '4' OR zensur_status_upc LIKE '1' OR zensur_status_upc LIKE '2' OR zensur_status_upc LIKE '3' OR zensur_status_upc LIKE '4'");

$ausgabe = array();
while($row =mysqli_fetch_assoc($ergebnis))
  {
    echo $row->domain;
    #$ausgabe[] = $row;
  }

#echo json_encode($ausgabe);

?>
