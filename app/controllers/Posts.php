<?php

namespace app\controllers;
class Posts
{
    public $prost = [];
    public $poli = [];

    public function indexAction()
    {
        echo __METHOD__;
        echo ' krut<br>';
    }

    public function addAction()
    {
        echo __METHOD__;
        echo ' krut<br>';
    }

    public function testNewAction()
    {

        for ($i = 1; $i <= 99; $i++) {
//            echo  $i.' ' . 100%$i . '<br>';
            if (self::is_prost($i)) {

                $this->prost[] = $i;

            }
        }
        $this->is_poli($this->prost);
      debug($this->poli);
//debug($this->prost);
    }

    public function is_poli($arr)
    {
        $sds = [];
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 1; $j < $i; $j++) {

                $ppam =  $arr[$i] * $arr[$j];
//                $obr = strrev((string) $ppam);



//                   $sds[$i]['per'] =$arr[$i];
//                   $sds[$i]['vtor'] = $arr[$j];
//                   $sds[$i]['ppam'] = $ppam;
//                   $sds[$i]['obr'] = $obr;
//                   $sds[$i]['poli'] = 1;
//                   if ($ppam == $obr){ }


            }
        }
        $this->poli = $sds;

    }


    public function is_prost($n)
    {
        // перебираем возможные делители от 2 до sqrt(n)
        for ($d = 2; $d * $d <= $n; $d++) {
            // если разделилось нацело, то составное
            if ($n % $d == 0)
                return false;
        }
        // если нет нетривиальных делителей, то простое
        return true;
    }
}