<?php

namespace ExamFinalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    //////////////////////////////////////
    // Complète les fonctions suivantes //
    //////////////////////////////////////

    // Exercice 1
    public function traduire($string)
    {
        $voyelles = array("a", "e", "i", "o", "u");
        $atraduire = str_split($string, 1);
        $traduction = '';

        foreach ($atraduire as $key => $value) {
            if (in_array($value, $voyelles) && $value != 'e' && in_array($atraduire[$key - 1], $voyelles)) {

            } elseif (in_array($value, $voyelles) && $value != 'e') {
                $traduction .= 'av' . $value;
            } elseif ($value == 'e' && $atraduire[$key + 1] == ' ') {
                $traduction .= $value;
            } elseif ($value == 'e' && in_array($atraduire[$key - 1], $voyelles)) {
                $traduction .= 'av' . $value;
            } elseif ($value == 'e') {
                $traduction .= 'av' . $value;
            } else {
                $traduction .= $value;
            }
        }
        return $traduction;

        // Test derniere condition ( voyelles qui se suivent, marche pas)
//        $voyelles = array("a", "e", "i", "o", "u");
//        $atraduire = str_split($string, 1);
//        $traduction = '';
//
//        foreach ($atraduire as $key => $value){
//            if ($value == 'e'){
//                if (isset($atraduire[$key-1]) && in_array($atraduire[$key-1], $voyelles)){
//                    $traduction .= $value;
//                } elseif (isset($atraduire[$key+1]) && $atraduire[$key+1] == ' '){
//                    $traduction .= $value;
//                } else{
//                    $traduction = 'av'.$value;
//                }
//            } elseif (in_array($value, $voyelles)){
//                if(isset($atraduire[$key-1]) && in_array($atraduire[$key-1], $voyelles)){
//                    $traduction .= $value;
//                }else{
//                    $traduction .= 'av'.$value;
//                }
//            } else {
//                $traduction .= $value;
//            }
//        }
//        return $traduction;
    }

    // Exercice 2
    public function action($input)
    {
//        foreach ($input as $value1){
//            foreach ($value1 as $key=>$value2){
//                if ($value2 == 0) {
//                    $value1[$key] = 0;
//                } elseif (!isset($value1[$key-1]) && $value2 = 1) {
//                    $value1[$key] = 1;
//                } elseif (isset($value1[$key-1]) && $value1[$key-1] = 1){
//                    $value1[$key] = 2;
//                } else {
//
//                }
//            }
//        }
//        return $input;

        var_dump($input);
        $result = [];
        foreach ($input as $key1 => $value1) {
            if ($key1 == 0 || $key1 = count($input)-1) {
                $result[] = $value1;
            } else {
                foreach ($value1 as $key2=>$value2) {
//                    if ($value2 == 1 and !isset($value1[$key2 - 1])){
//                        $result[$key1][$key2] = 1;
//                    } elseif ($value2 == 0){
//                        $result[$key1][$key2] = 0;
//                    } else {
//                        $result[$key1][$key2] = 2;
//                    }
                    if ($value2 == 0){
                        $result[$key1][$key2] = 0;
                    } elseif ($value2 == 1 && isset($value1[$key2 - 1]) && $value1[$key2-1] == 1){
                        $result[$key1][$key2] = 2;
                    } else {
                        $result[$key1][$key2] = 1;
                    }
                }
            }
        }
        var_dump($result);
        return $result;
    }
}