<?php

namespace app\controllers;
class Posts
{
        public function indexAction()
    {
        echo __METHOD__;
        echo ' krut<br>';
    }
}
//    public $prost = [];
//    public $poli = [];
//

//
//    public function addAction()
//    {
//        echo __METHOD__;
//        echo ' krut<br>';
//    }
//
//    public function testNewAction()
//    {
//
//        for ($i = 1; $i <= 99; $i++) {
////            echo  $i.' ' . 100%$i . '<br>';
//            if (self::is_prost($i)) {
//
//                $this->prost[] = $i;
//
//            }
//        }
//        $this->is_poli($this->prost);
//      debug($this->poli);
////debug($this->prost);
//    }
//
//    public function is_poli($arr)
//    {
//        $sds = [];
//        for ($i = 0; $i < count($arr); $i++) {
//            for ($j = 1; $j < $i; $j++) {
//
//                $ppam =  $arr[$i] * $arr[$j];
////                $obr = strrev((string) $ppam);
//
//
//
////                   $sds[$i]['per'] =$arr[$i];
////                   $sds[$i]['vtor'] = $arr[$j];
////                   $sds[$i]['ppam'] = $ppam;
////                   $sds[$i]['obr'] = $obr;
////                   $sds[$i]['poli'] = 1;
////                   if ($ppam == $obr){ }
//
//
//            }
//        }
//        $this->poli = $sds;
//
//    }
//
//
//    public function is_prost($n)
//    {
//        // перебираем возможные делители от 2 до sqrt(n)
//        for ($d = 2; $d * $d <= $n; $d++) {
//            // если разделилось нацело, то составное
//            if ($n % $d == 0)
//                return false;
//        }
//        // если нет нетривиальных делителей, то простое
//        return true;
//    }
//}
//

//    /**
//     * Created by PhpStorm.
//     * User: Vialii (kurylo.vitali@gmail.com)
//     * Date: 10.10.2017
//     * Time: 17:57
//     */
//
//    class Index
//    {
//
//        public static $prost = [];
//        public static $pali = [];
//
//
//        public static function main()
//        {
//            $begin = 10000;
//            $end = 99999;
//            for ($i = $begin; $i <= $end; $i++) {
//                if (self::is_prost($i)) {
//                    self::$prost[] = $i;
//                }
//            }
//            self::is_pali(self::$prost);
//            echo self::$pali[0];
//        }
//
//
//        protected function is_prost($var)
//        {
//            for ($i = 2; $i * $i <= $var; $i++) {
//                if ($var % $i == 0) {
//                    return false;
//                }
//            }
//            return true;
//        }
//
//        protected function is_pali($arr)
//        {
//            $pali = [];
//            for ($i = 0; $i < count($arr); $i++) {
//                for ($j = $i + 1; $j < count($arr); $j++) {
//                    $have = $arr[$i] * $arr[$j];
//                    $revers = strrev((string)$have);
//                    if ($have == $revers) {
//                        $pali[] = $have;
//                    }
//                }
//            }
//            rsort($pali);
//            self::$pali = $pali;
//        }
//    }
//
//    Index::main();