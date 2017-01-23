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
        $string ='';
        $add='av';
        foreach ($string as $add)
        if (preg_match('#[aeiouy]'.$add, $string)) {

            $result =$add.$string;
        }elseif{

        }else{

        }
        return strtolower($result);


    }

    // Exercice 2
    public function action($input)
    {
      $tab1='0';
      $tab2='1';
        foreach ($tab1 as $tab2){
            if ($tab1==0){

            }
        }elseif ($tab2==1){

    }

}