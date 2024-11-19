<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html">    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light dark">
  <title>C - Язык Программирования</title>
  <style><?php include 'styles.css'; ?></style>
  <script type="text/javascript"
    src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
  </script>
</head>

<?php
  include "table.php";
?>

<body>
  <header><h1>C - Язык Программирования</h1></header>

  <div id="main-wrapper">
    <div id="navigation">        
      <nav aria-labelledby="table-of-contents">
        <h2 id="table-of-contents">Содержание</h2>
        <ul>

<?php
foreach ($book as $i => $value1) {
  echo "<li><a href=\"#" . $i . "\">" .
       $i . ". " . $value1["name"] .
       "</a><ul>";
  foreach ($value1["content"] as $j => $value2) {
    echo "<li><a href=\"#" . $i . "." . $j . "\">" .
         $i . "." . $j . ". " . $value2["name"] .
         "</a><ul>";
    foreach ($value2["content"] as $k => $value3) {
      echo "<li><a href=\"#" . $i . "." . $j . "." . $k . "\">" .
           $i . "." . $j . "." . $k . ". " . $value3 .
           "</a></li>";
    }
    echo "</ul></li>";
  }
  echo "</ul></li>";
}
?>

        </ul>
      </nav>
    </div>

    <div id="contents-wrapper">
      <main id="contents">

<?php
foreach ($book as $i => $value1) {
  echo "<h2 id=\"" . $i . "\">" .
       $i . ". " . $value1["name"] .
       "</h2>";
  foreach ($value1["content"] as $j => $value2) {
    echo "<h3 id=\"" . $i . "." . $j . "\">" .
         $i . "." . $j . ". " . $value2["name"] .
         "</h3>";
    foreach ($value2["content"] as $k => $value3) {
      echo "<h3 id=\"" . $i . "." . $j . "." . $k . "\">" .
           $i . "." . $j . "." . $k . ". " . $value3 . "</h3>";
      include $i . "/" . $j . "/" . $k;
    }
  }
}
?>

      </main>
    </div>
  </div>
</body>

</html>
