<?php 
$row = 1;
$array = [][];
if (($handle = fopen("aliments.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
    $num = count($data);
    echo "<p> $num fields in line $row: <br /></p>\n";
    
    for ($c=0; $c < $num; $c++) {
        echo $data[$c] . "<br />\n";
        if($row > 1){
          $array[$row-1][$c] = $data[$c];
        }
    }
    $row++;
  }
  fclose($handle);
  echo $array;
}
?>