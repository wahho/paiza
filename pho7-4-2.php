<?php
/**
 * Created by PhpStorm.
 * User: wahho
 * Date: 2016/01/10
 * Time: 19:31
 */
// 問題: https://paiza.jp/poh/ando/challenge/ccdab378/ando12

    $arr_n = array();
    $arr_m = array();
    $x = 0;
    $y = 0;
    $ans = TRUE;
    $in_n = intval(trim(fgets(STDIN)));
//  echo "in_n: $in_n\n";
    for($i = 0; $i < $in_n; $i++){
        $in_q = trim(fgets(STDIN));
//  echo "q[$i]: $in_q\n";
        $arr_n[$i] = explode(' ', $in_q);
//  print_r($arr_n[$i]);
    }
    $in_m = intval(trim(fgets(STDIN)));
    for($i = 0; $i < $in_m; $i++){
        $in_p = trim(fgets(STDIN));
        $arr_m[$i] = explode(' ', $in_p);
//  print_r($arr_m[$i]);
    }
    while($x < ($in_n - $in_m + 1)){
        $y = 0;
        while($y < ($in_n - $in_m + 1)) {
            $ans = TRUE;
            for ($i = 0; $i < $in_m; $i++) {
                for ($j = 0; $j < $in_m; $j++) {
                    if ($arr_n[$x + $i][$y + $j] != $arr_m[$i][$j]) {
                        $ans = FALSE;
                        break;
                    }
                }
                if(!$ans){break;}
            }
//    echo "(x$x)(y$y):(i$i)(j$j) $ans\n";
            if ($ans) {break;}
            $y++;
        }
        if ($ans) {break;}
        $x++;
    }
    echo "$x $y";
//    fgets(STDIN);
?>
