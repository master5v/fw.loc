<?php
/**
 * Created by PhpStorm.
 * User: masok
 * Date: 11.10.2017
 * Time: 10:13
 */
//
//namespace app\controllers;
//
//
//class Test
//{
//
//}
$prost = [];
$limit = 100;

for ($i = 1; $i <= $limit; $i++){
    $prost[$i] = 1;
}

for ($i = 2; $i <= $limit; $i++) {
    if ($prost[$i] == 1) {
        for ($j = 2; ($i + $j) <= $limit; $j += $i) {
            $prost[$i + $j] = 0;
            echo $i+$j."<br>";
        }

    }

}





//        if (($i+$j)<= $limit  && $prost[$j] == 1){
//
////            echo $i+$j."<br>";
//



echo '<pre>';
//print_r($prost);
print_r($prost);



//
//class Palindrom
//{
//    protected $prost = [];
//    protected $pali = [];
//
//
//    public function indexAction()
//    {
//        $begin = 10000;
//        $end = 99999;
//
//        for ($i = $begin; $i <= $end; $i++) {
//            if ($this->is_prost($i)) {
//                $this->prost[] = $i;
//            }
//        }
//        $this->is_pali($this->prost);
//
//        echo '<pre>';
//        print_r($this->pali);
//        echo '</pre>';
//    }
//
//
//    protected function is_prost($var)
//    {
//        for ($i = 2; $i * $i <= $var; $i++) {
//            if ($var % $i == 0) {
//                return false;
//            }
//        }
//        return true;
//    }
//
//    protected function is_pali($arr)
//    {
//        $pali = [];
//        $pali['first'] = 0;
//        $pali['second'] = 0;
//        $pali['result'] = 0;
//
//        for ($i = 0; $i < count($arr); $i++) {
//            for ($j = $i + 1; $j < count($arr); $j++) {
//                $have = $arr[$i] * $arr[$j];
//                $revers = strrev((string)$have);
//                if ($have == $revers) {
//                    if ($pali['result'] < $have) {
//                        $pali['first'] = $arr[$i];
//                        $pali['second'] = $arr[$j];
//                        $pali['result'] = $have;
//                    }
//                }
//            }
//        }
//        $this->pali = $pali;
//    }
//}
//
//$obj = new Palindrom;
//$obj->indexAction();