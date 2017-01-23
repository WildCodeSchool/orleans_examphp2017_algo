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
        $string = strtolower($string);
        $caracteres=preg_split('//',$string,-1,PREG_SPLIT_NO_EMPTY);
        print_r($caracteres);
    }

    // Exercice 2
    public function action($input)
    {
        //Boucle de construction et de remise à zéro
        for ($i = 0; $i < 6;$i++)
        {
            for ($g = 0; $g < 7;$g++)
            {
                $tableau[$i][$g] = "Vide";
            }
        }
//Boucle d'affichage
        for ($i = 0; $i < 6;$i++)
        {
            for ($g = 0; $g < 7;$g++)
            {
                echo $tableau[$i][$g];
            }
        }
    }
}
