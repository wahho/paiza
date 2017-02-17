<?php
/**
 * Created by PhpStorm.
 * User: wahho
 * Date: 2016/01/10
 * Time: 20:21
 */
// 問題: https://paiza.jp/poh/ando/challenge/ccdab378/ando13

    $arr_x = array();
    $arr_y = array();
    $in = trim(fgets(STDIN));
    $arr_in = explode(' ', $in);
    $in_x = $left_x = $min_x = intval($arr_in[0]);
    $in_y = $left_y = $min_y = intval($arr_in[1]);
    $in_z = intval($arr_in[2]);
    $in_n = intval($arr_in[3]);
//    echo "in: $in_x $in_y $in_z $in_n\n";
    for($i = 0; $i < $in_n; $i++){
        $in = trim(fgets(STDIN));
        $arr_in = explode(' ', $in);
        if($arr_in[0] == 0){
            $arr_x[] = intval($arr_in[1]);
        }else{
            $arr_y[] = intval($arr_in[1]);
        }
    }
    $arr_x[] = 0;
    $arr_x[] = $in_x;
    $arr_y[] = 0;
    $arr_y[] = $in_y;
    rsort($arr_x);
    rsort($arr_y);
//    print_r($arr_x);
//    print_r($arr_y);
    for($i = 0; $i < (count($arr_x) - 1); $i++){
        $left_x = $arr_x[$i] - $arr_x[$i+1];
//        echo "left_x $i: $left_x\n";
        if($min_x > $left_x){$min_x = $left_x;}
    }
    for($i = 0; $i < (count($arr_y) - 1); $i++){
        $left_y = $arr_y[$i] - $arr_y[$i+1];
//        echo "left_y $i: $left_y\n";
        if($min_y > $left_y){$min_y = $left_y;}
    }
    $ans = $min_x * $min_y * $in_z;
    echo "$ans";
//    echo "\nleft: $min_x * $min_y * $in_z\n";
//    fgets(STDIN);
?>
