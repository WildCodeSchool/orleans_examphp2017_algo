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
        $words = explode(' ', $string);
        $output = $javanese = [];

        $pattern = '/[aeiouy]/';
        foreach ($words as $word) {
            $letters = str_split($word);
            for ($i = 0; $i < count($letters); $i++) {

                if (preg_match($pattern, $letters[$i])) {
                    $output[] = 'av' . $letters[$i];
                } else {
                    $output[] = $letters[$i];
                }

            }
            $javanese[] = implode($output);
        }
        return implode(' ', $javanese);
    }

    // Exercice 2
    public function action($input)
    {


        $output = [];
        foreach ($input as $key => $value) {

                if ($value[$key] <= 2) {
                    $output[$key] = 2;

                } else {
                    $output[$key] = 1;
                }

        }


        /*for ($i = 1 ; $i<count($input);$i++) {
            if ($input[$i]<=2){
                $output[$i] = 2;
            } else{
                $output[$i] = $input[$i];
            }*/
        return $output;
    }

}