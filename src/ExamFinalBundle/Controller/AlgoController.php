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
//        $voyelles = array("a", "e", "i", "o", "u", "y");
//        $string = strtolower($string);
//        $string = str_replace($voyelles, "av", $string);
//
//        return $string;

        $string = strtolower($string);
        $letters = str_split($string);
        $pattern = '/[aeiouy]/';

        foreach ($letters as $letter) {
            if (preg_match($pattern, $letter)) {
                $javanais = 'av'.$letter;
                return $javanais;

            } else {
                return implode($letters);
            }
        }
    }



    // Exercice 2
    public function action($input)
    {

    }
}