<?php
include "table.php";
// Three level structure
echo "\n## Содержание\n\n";
foreach ($book as $i => $value1) {
  echo "* " . $value1["name"] . "\n";
  foreach ($value1["content"] as $j => $value2) {
    echo "    * " . $value2["name"] . "\n";
  }
}
echo "\n";
?>