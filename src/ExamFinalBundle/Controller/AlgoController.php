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
        $string = 'wild';
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

        //$result = str_replace($vowels,"av",$string);
        $result = '';
        $letters = str_split($string, 1);
        foreach ($letters as $letter) {
            if ($letter == $vowels) {
                $letter .= 'av' . $letter;
                $result .= $letter;
            }

        }
        return $result;
    }

    // Exercice 2
    public function action($input)
    {

        //tableaux dans un tableau
        $input55 = array(
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1),
        );

        foreach ($input55 as $key => $value) {
            if ($value == 1) {
                $output55 = $value == 2;
            }
        }

        return $output55;

    }
}