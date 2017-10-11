<?php

namespace app\controllers;
class Posts
{
    public $prost = [];
    public $pali = [];


    public function indexAction()
    {
        $begin = 10000;
        $end = 99999;
        for ($i = $begin; $i <= $end; $i++) {
            if ($this->is_prost($i)) {
                $this->prost[] = $i;
            }
        }
        $this->is_pali($this->prost);
        debug($this->pali);
    }


    protected function is_prost($var)
    {
        for ($i = 2; $i * $i <= $var; $i++) {
            if ($var % $i == 0) {
                return false;
            }
        }
        return true;
    }

    protected function is_pali($arr)
    {
        $pali = [];
        $pali['first'] = 0;
        $pali['second'] = 0;
        $pali['result'] = 0;

        for ($i = 0; $i < count($arr); $i++) {
            for ($j = $i + 1; $j < count($arr); $j++) {
                $have = $arr[$i] * $arr[$j];
                $revers = strrev((string)$have);
                if ($have == $revers) {
                    if ($pali['result'] < $have) {
                        $pali['first'] = $arr[$i];
                        $pali['second'] = $arr[$j];
                        $pali['result'] = $have;
                    }
                }
            }
        }
        $this->pali = $pali;
    }
}