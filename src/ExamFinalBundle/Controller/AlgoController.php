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
        //on traite uniquement les minuscules
        $string = strtolower(trim($string));

        $strLong = strlen($string);
        $javaString = '';
        $lastIsVoyelle = false;

        for ($i=0; $i<$strLong; $i++) {
            //recherche des voyelles
            if(preg_match('/[aeiouy]/',$string[$i])){
                if(!$lastIsVoyelle && !($string[$i] == 'e' &&  $string[$i+1] == ' ')){
                    $javaString .= 'av' . $string[$i];
                    $lastIsVoyelle = true;
                }else{
                    $javaString .= $string[$i];
                }
            }else{
                $javaString .= $string[$i];
                $lastIsVoyelle = false;
            }
        }
        return $javaString;
    }

    // Exercice 2
    public function action($input)
    {
        $oneTow=[1=>2];
        $output = [];
        foreach ($input as $keyMaster=>$tab) {
            if($keyMaster>0 && $keyMaster<count($input)) {
                foreach ($tab as $key => $item) {
                    if ($key > 0 && $key < count($tab)) {
                        $output[$key] = [$tab[$key]];
                    }
                }
            }
        }
        return $output;
    }
}