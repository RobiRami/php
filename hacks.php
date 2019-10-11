<?php

for ($i = 0; $i < 10; $i++) {
   echo $i;
}

while ($j < 10) {
   echo $j;
   $j = $j + 1;
   echo "haha you are hacked!";
}

if(isset($_GET['hack']){
   $h = $_GET['hack'];
   if(is_numeric($h)){
      for($i = 0; $i < $h; $i++) echo ("magix hacks #" . $i);
   } else {
      echo $h;  
   }
}

?>
