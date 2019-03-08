<?php
if (version_compare(phpversion(), '5.3.10', '<')) {
    echo "We need an upgrade.<br>".PHP_EOL;
}else echo "PHP version sufficient.<br>".PHP_EOL;
foreach (get_loaded_extensions() as $i => $ext) 
{ 
   echo $ext .' => '. phpversion($ext). '<br/>'; 
} 
?>