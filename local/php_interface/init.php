<?php

function pre($var, $title = '')
{
   if (php_sapi_name() != "cli") {
       echo '<h3>'.$title.'</h3>';
       if (is_array($var)) {
           echo 'count = ' . count($var) . '<br>';
       }
       echo '<pre>';
       print_r($var);
       echo '</pre>';
       return;
   }
   echo PHP_EOL . $title . PHP_EOL;
   if (is_array($var)) {
       echo 'count = ' . count($var) . PHP_EOL;
   }
   print_r($var);
}
