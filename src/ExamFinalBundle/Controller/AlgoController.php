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
                $tab[$letters].+'av';
            }
            return implode("",$tab);
        }
    }

    // Exercice 2
    public function action($input)
    {
        for($i = 1; $i<=count($input); $i++) {
                $input[$i][1] = $input[$i][1] + 1;
            }
            return $input;
    }
}