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
        $tabString = str_split(strtolower($string));

        for ($i = 0; $i <= count($tabString); $i++) {
            $j = $i - 1;
            if (preg_match("#[aeiouy]#", $tabString[$i]) and preg_match("#[^aeiouy]#", $tabString[$j])) {
                if ($i = count($tabString) and $tabString[$i] = 'e') {
                    $tabString[$i] = 'e';
                } else
                    $tabString[$i] = 'av' . $tabString[$i];
            }
        }
        return implode($tabString);
    }

    // Exercice 2
    public function action($input)
    {

        for ($i = 0; $i <= count($input); $i++) {
            $line = $input[$i];
            $top = $input[$i - 1];
            $bottom = $input[$i + 1];
            for ($j = 0; $j <= count($line); $j++) {
                $n = $top[$line[$j]];
                $no = $top[$line[$j - 1]];
                $o = $line[$j + 1];
                $so = $bottom[$line[$j - 1]];
                $s = $bottom[$line[$j]];
                $se = $bottom[$line[$j + 1]];
                $e = $line[$j - 1];
                $ne = $top[$line[$j + 1]];

                if ($line[$j] = 0) {
                    $input[$i[$j]] = 0;
                } elseif ($line[$j] = 1 and isset($n) and isset($no) and isset($o) and isset($so) and isset($s) and isset($se) and isset($e) and isset($ne)) {
                    if ($n = 0 or $no = 0 or $o = 0 or $so = 0 or $s = 0 or $se = 0 or $e = 0 or $ne = 0) {
                        $input[$i[$j]] = 1;
                    }
                    if ($n + $no + $o + $so + $s + $se + $e + $ne >= 3 and ($n != 0 or $no != 0 or $o != 0 or $so != 0 or $s != 0 or $se != 0 or $e != 0 or $ne != 0)) {
                        $input[$i[$j]] = 2;
                    } else {
                        $input[$i[$j]] = 1;
                    }
                }


            }
        }

    }
}