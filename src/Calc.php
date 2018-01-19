<?php

namespace Sample;

class Calc {
    function add($a, $b) {
        return $a + $b;
    }

    function sub($a, $b) {
        return $a - $b;
    }

    function kakezan($a, $b) {
        return $a * $b;
    }

    function warizan($a, $b) {
        return $a / $b;
    }

    function zero($a, $b) {
        if($b==0){
		return 2;
	}
    }
}
