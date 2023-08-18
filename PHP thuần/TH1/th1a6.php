<?php
    $keys = array(
        "field1"=>"first",
        "field2"=>"second",
        "field3"=>"third"
       );
       $values = array(
        "field1value"=>"dinosaur",
        "field2value"=>"pig",
        "field3value"=>"platypus"
       );
       
       $keysAndValues = array();
       
       foreach ($keys as $key => $value) {
           $val = $values[$key . 'value'];
           $keysAndValues[$value] = $val;
       }
       
       print_r($keysAndValues);
?>