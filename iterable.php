<?php
function printIterable(iterable $myIterable) {
    foreach($myIterable as $item) {
      echo $item;
    }
}

$arr = ["Bahan", "Segar", "Enak", "Sehat", "Alami"];
printIterable($arr);
?>