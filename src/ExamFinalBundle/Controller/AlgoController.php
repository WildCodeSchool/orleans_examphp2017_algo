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
        $string = str_split(strtolower($string));
        $pattern = ['a', 'e', 'é', 'è', 'i', 'o', 'u', 'ù', 'y'];
        $tab = [];
        foreach ($string as $letters) {
            if (in_array($pattern, $tab)) {
                $tab[$letters] .= 'av';
            }
            return implode(" ", $tab);
        }
    }

    // Exercice 2
    public function action($input)
    {
        foreach ($input as $int) {
            foreach ($input as $int => $value) {
                if ($input[$int] == 0) {
                    $input[$int][$value] = 1;
                } else {
                    $input[$int][$value] += $input[$int][$value];
                }
                return $input;
            }
        }
    }
}