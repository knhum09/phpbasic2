<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $array1=['a'=>23,'b'=>34,'c'=>56];
            print_r($array1);
            echo '<hr>';
            echo $array1['b'];
            echo '<hr>';
            foreach ($array1 as $key => $value) {
                echo 'key :'.$key.' / '.$value.'<br>';
                
            }
            echo '<hr>';
            $array2=['aaa','bbb','ccc'];
            $c_ar=  count($array2);
            for($num_l=0;$num_l<$c_ar;$num_l++){
                echo $array2[$num_l].'<br>';
            }
            
        ?>
    </body>
</html>
