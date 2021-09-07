<?php
require("connection.php");

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}


// Select all the rows in the markers table
$query = "SELECT * FROM donations WHERE 1 AND status = '1'";
$result = $conn->query($query);

header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each****/

while ($row = $result->fetch_assoc()){
  // Add to XML document node
  echo '<marker ';
  echo 'donation_id="' . $row['donation_id'] . '" ';
  echo 'donation_description="' . parseToXML($row['donation_description']) . '" ';
  echo 'donation_location="' . parseToXML($row['donation_location']) . '" ';
  echo 'donation_quantity="' . parseToXML($row['donation_quantity']) . '" ';
  echo 'donation_time="' . parseToXML($row['donation_time']) . '" ';
  echo 'donor_phone="' . parseToXML($row['donor_phone']) . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  echo 'FoodType="' . $row['FoodType'] . '" ';
//  echo '<br />';
  //echo 'type="' . $row['type'] . '" ';
  echo '/>';
 $ind = $ind + 1;
}

// End XML file
echo '</markers>';

?>