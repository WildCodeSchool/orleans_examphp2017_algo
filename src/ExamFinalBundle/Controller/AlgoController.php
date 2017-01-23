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
//        $stringLower = mb_strtolower($string);
        $tabs = explode(' ', $string);
        $result = null;
        foreach ($tabs as $tab) {

            $caractere= str_split($tab);
            $nbCaractere=count($caractere);
                for ($i=1; $i< $nbCaractere; $i++){
                    if ($caractere[$i] == $caractere[$i-1]){
                        $result .= $caractere[$i];
                    }elseif($caractere[$i]='a' || $caractere[$i]='e' ||$caractere[$i]='i' ||$caractere[$i]='o' ||$caractere[$i]='u' ||$caractere[$i]='y'){
                        $result .= 'av'.$caractere[$i];

                    }else{
                        $result .= $caractere[$i];
                    }
                }
            $result.=' ';
        }
    return $result;


    }

    // Exercice 2
    public function action($input)
    {
        $nbligne=0;
        foreach ($input as $value) {
            $nbligne++;
        }
        foreach ($input as $key=>$ligne) {
            $colone=count($ligne);
            if($key !=0 || $key!=$nbligne){
                for ($i=1; $i<$nbligne; $i++) {
                    foreach ($ligne as $keycase => $case) {
                        if ($keycase !=0 ||$keycase != $colone) {
                            if($case[$keycase-1]>=1 && $ligne[$key-1][$keycase]>=1){
                                $input[$key][$keycase]= 2;
                            }
                        }
                    }
                }
            }

        }
        return $input;

    }
}