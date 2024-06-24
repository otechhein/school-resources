<?php

// Const အတွက် $ မလို
// Trait တွေမှာ Const တွေ ထည့်မရေးရ
// Class Const တွေဟာ Static Member တွေ ဖြစ်တယ်

// define("PI", 3.14);

class Area {
    const PI = 3.14;

    public function circle($r){
        echo $this->PI * $r * $r;
    }
}

echo Area::PI;

