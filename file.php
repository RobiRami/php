<?php

  include('hacks.php');
  if ($_GET['a'] == 'b') {
    echo "<div class='b'>This box has shadows</div>"; 
  } else {
    echo "<div>I'm boring</div>"; 
  }
?>
