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
        $words = explode(' ', $string); //sépare la phrase en mots

        foreach ($words as $word){
            $letters = str_split($word);
            foreach ($letters as $letter){
                if($letter == 'e' AND !isset($letters[count($word)])){
                    $letter = 'e';
                }elseif(preg_match('/[aeiouy]{2,}/', $letters)){
                    $letter = preg_replace('/[aeiouy]{2,}/', '/^av[aeiouy]{2,}/', $letters);
                } else{
                    $patterns = array();
                    $pattern[0] = '/a/';
                    $pattern[1] = '/e/';
                    $pattern[2] = '/i/';
                    $pattern[3] = '/o/';
                    $pattern[4] = '/u/';
                    $pattern[5] = '/y/';

                    $replacements = array();
                    $pattern[0] = '/ava/';
                    $pattern[1] = '/ave/';
                    $pattern[2] = '/avi/';
                    $pattern[3] = '/avo/';
                    $pattern[4] = '/avu/';
                    $pattern[5] = '/avy/';

                    preg_replace($patterns, $replacements, $word);
                }
            }
            return implode($words);
        }
    }




    // Exercice 2
    public function action($input)
    {
        $input = [];
        $output = [];

        foreach ($input as $row){
            foreach ($row as $cells){
                if(count($row) >= 3 AND sum($row) >= 3){
                    $cells = 1;
                    if($input[0] = $input[1]){
                        $cells = 2;
                        $row[0] = 1;
                        $row[count($row)-1] = 1;
                    }
                }elseif ($cells == 0){
                    $cells = 0;

                }
            }
        }
        return $output;
    }
    // 1. décompser le tableau en lignes
    // 2. pour chaque ligne, si la cellule est égale à 0 la cellule output sera égale à 0
    //    si la cellule est égale à 1 la cellule output sera de 1 sauf si la précédente est restée inchangée elle sera alors de 2
    // 3. le calcul ne peut être fait que si le nombre de row est supérieur à 3 sous condition que les cellules de cette ligne soient de 1
}
