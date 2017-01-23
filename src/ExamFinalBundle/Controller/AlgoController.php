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
        $voyelles = ['a', 'e', 'i', 'o', 'u'];
        $array = str_split($string);
        $array_new = array();

        foreach ($array as $value) {
            array_push($array_new, $value);
            if (!in_array($value, $voyelles)) {
                array_push($array_new, 'av');
            }
        }
    }



    // Exercice 2
    public function action($input)
    {
        $search = 1;
        $replace = 2;
        for($i=0;$i<count($input);$i++) {
            if($input[$i] == $search) {
                $input[$i] = $replace;
            }
        }
    }
}