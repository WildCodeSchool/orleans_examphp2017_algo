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

        $caractères  = str_split($string);
        $javanais = ['av'];
        $resultat =[];
        foreach( $caractères as $voyelles )
        {
            if (preg_match('/[aeiouy]{1}/', $voyelles))
            {
               $resultat += ['av'.$voyelles];
            }


        }

    return implode ("", $resultat );

    }

    // Exercice 2
    public function action($input)
    {

        $array1 =[];
        $array2 =[];
        $array3 =[];
        $array4 =[];
        $array5 =[];
        $array6 =[];
        $array7 =[];
        $array8 =[];
        $array9 =[];

        $result1 =[];
        $result2 =[];
        $result3 =[];
        $result4 =[];
        $result5 =[];
        $result6 =[];
        $result7 =[];
        $result8 =[];
        $n = 0;
        foreach ( $input as $key => $value)
        {
            if ($value[$key[$n]] =1 and $value[$key[$n+1]] =1 )
            {
                $result1 = $array2[$key[$n+1]] = 2;
                $result2 = $array3[$key[$n+1]] = 2;
                $result3 = $array4[$key[$n+1]] = 2;
                $result4 = $array5[$key[$n+1]] = 2;
                $result5 = $array6[$key[$n+1]] = 2;
                $result6 = $array7[$key[$n+1]] = 2;
                $result7 = $array8[$key[$n+1]] = 2;
                $result8 = $array9[$key[$n+1]] = 2;

            }
            $n++;
        }
         return $resultfinal = array_merge (  $array1 ,[$result1],[$result2],[$result3],[$result4],[$result5],[$result6],[$result7],[$result8 ]);


    }

}