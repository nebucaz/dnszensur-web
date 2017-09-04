<?php
# set json header
header('Content-Type: application/json');

# db connections
include ("../include/db_connect.php");

# mysql query
$ergebnis = mysqli_query($db, "SELECT domain, last_update_swisscom, last_update_upc, zensur_status_swisscom, zensur_status_upc FROM domains WHERE zensur_status_swisscom LIKE '1' OR zensur_status_swisscom LIKE '2' OR zensur_status_swisscom LIKE '3' OR zensur_status_swisscom LIKE '4' OR zensur_status_upc LIKE '1' OR zensur_status_upc LIKE '2' OR zensur_status_upc LIKE '3' OR zensur_status_upc LIKE '4'");

# arraw with mysql query output
$ausgabe = array();
while($row =mysqli_fetch_assoc($ergebnis))
  {
    if ($row[zensur_status_swisscom] == "2" || $row[zensur_status_upc] == "2") {
    $row[domain] = substr("$row[domain]", 0, 3) . "***";
    }

    # for debuging
    # var_dump($row);

    $ausgabe[] = $row;
  }

# for debuging
#echo json_encode($ausgabe);

# json output write to file
$jsonecho = json_encode($ausgabe);
file_put_contents("list.json", $jsonecho);

?>
