<?php

if ($argc != 2 || in_array($argv[1], array('texto1', 'texto 2', 'texto3', 'texto4'))) {
     echo $argv[0]; 
} else {
     echo $argv[1];
}

 ?>