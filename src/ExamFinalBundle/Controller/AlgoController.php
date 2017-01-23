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
        $phrase = explode(' ', $string);
        $table = str_split($phrase);

        $voyelle = '/[aeiouy]/';
        $voyellefin = "#[aeiouy]$#";

        $javanais = "av";

        if(preg_match($voyelle, $phrase )) {
            echo $javanais, $string;
        }
        elseif(preg_match($voyellefin, $phrase) && (preg_match($voyellefin, $phrase) == "e")){
            echo $string;
        }



    }

    // Exercice 2
    public function action($input)
    {
        $caract = "1";
        $result = str_replace($caract, "2", $string);
      
    }
}