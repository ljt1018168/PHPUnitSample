<?php
namespace App;
class Calculator{
    public function add($a, $b){
        return $a + $b;
    }

    public function sub($a, $b){
        return $a - $b;
    }

    public function mul($a, $b){
        return $a * $b;
    }
    // 除法
    public function div($a, $b){
        if($b == 0){
            throw new \Exception('除數不能為0');
        }
        return $a / $b;
    }
    // 乘方
    public function pow($a, $b){
        return pow($a, $b);
    }
}