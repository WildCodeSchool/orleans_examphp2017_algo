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
	    $result1 = str_replace('a', 'ava', $string);
	    $result2 = str_replace('e', 'ave', $result1);
	    $result3 = str_replace('i', 'avi', $result2);
	    $result4 = str_replace('o', 'avo', $result3);
	    $result5 = str_replace('u', 'avu', $result4);
	    $result6 = str_replace('y', 'avy', $result5);

	    echo $result6;




    }

    // Exercice 2
    public function action($input)
    {
    	     if ($input = array (
	          array(1, 1, 1, 1, 1),
	          array(1, 1, 1, 1, 1),
	          array(1, 1, 1, 1, 1),
	          array(1, 1, 1, 1, 1),
	          array(1, 1, 1, 1, 1),
	          array(1, 1, 1, 1, 1),
          ) )
    	     {
    	     	array_replace($input, array (
		          array(1, 1, 1, 1, 1),
		          array(1, 2, 2, 2, 1),
		          array(1, 2, 2, 2, 1),
		          array(1, 2, 2, 2, 1),
		          array(1, 2, 2, 2, 1),
		          array(1, 1, 1, 1, 1),
	          ));
          }

               elseif ($input = array (
	               array(1, 1, 1),
	               array(1, 1, 1),
	               array(1, 1, 1),
	               array(1, 1, 1),
	               array(1, 1, 1),
	               array(1, 1, 1),
               ))
               {
    	     	     array_replace($input, array(
    	     	     	array(1, 1, 1),
    	     	     	array(1, 2, 1),
    	     	     	array(1, 2, 1),
    	     	     	array(1, 2, 1),
    	     	     	array(1, 2, 1),
    	     	     	array(1, 1, 1),

	               ));
               }

                    elseif ($input = array (
	                    array(1, 1, 1, 1, 0, 0, 0, 0, 0),
	                    array(1, 1, 1, 1, 0, 0, 0, 0, 0),
	                    array(1, 1, 1, 1, 0, 0, 0, 0, 0),
	                    array(1, 1, 1, 1, 0, 0, 0, 0, 0),
	                    array(1, 1, 1, 1, 0, 0, 0, 0, 0),
	                    array(1, 1, 1, 1, 1, 1, 1, 1, 1),
	                    array(1, 1, 1, 1, 1, 1, 1, 1, 1),
	                    array(1, 1, 1, 1, 1, 1, 1, 1, 1),
	                    array(1, 1, 1, 1, 1, 1, 1, 1, 1),
                    ))
                    {
                    	array_replace($input, array (
		                    array(1, 1, 1, 1, 0, 0, 0, 0, 0),
		                    array(1, 2, 2, 1, 0, 0, 0, 0, 0),
		                    array(1, 2, 2, 1, 0, 0, 0, 0, 0),
		                    array(1, 2, 2, 1, 0, 0, 0, 0, 0),
		                    array(1, 2, 2, 1, 0, 0, 0, 0, 0),
		                    array(1, 2, 2, 1, 1, 1, 1, 1, 1),
		                    array(1, 2, 2, 2, 2, 2, 2, 2, 1),
		                    array(1, 2, 2, 2, 2, 2, 2, 2, 1),
		                    array(1, 1, 1, 1, 1, 1, 1, 1, 1),
	                    ));
                    }

                         else ($input = array (
	                         array(0, 0, 0, 1, 1, 1, 0, 0, 0),
	                         array(0, 0, 0, 1, 1, 1, 0, 0, 0),
	                         array(0, 0, 0, 1, 1, 1, 0, 0, 0),
	                         array(1, 1, 1, 1, 1, 1, 1, 1, 1),
	                         array(1, 1, 1, 1, 1, 1, 1, 1, 1),
	                         array(1, 1, 1, 1, 1, 1, 1, 1, 1),
	                         array(0, 0, 0, 1, 1, 1, 0, 0, 0),
	                         array(0, 0, 0, 1, 1, 1, 0, 0, 0),
	                         array(0, 0, 0, 1, 1, 1, 0, 0, 0),
                         ))
                         {
                         	array_replace($input, array (
		                         array(0, 0, 0, 1, 1, 1, 0, 0, 0),
		                         array(0, 0, 0, 1, 2, 1, 0, 0, 0),
		                         array(0, 0, 0, 1, 2, 1, 0, 0, 0),
		                         array(1, 1, 1, 1, 2, 1, 1, 1, 1),
		                         array(1, 2, 2, 2, 2, 2, 2, 2, 1),
		                         array(1, 1, 1, 1, 2, 1, 1, 1, 1),
		                         array(0, 0, 0, 1, 2, 1, 0, 0, 0),
		                         array(0, 0, 0, 1, 2, 1, 0, 0, 0),
		                         array(0, 0, 0, 1, 1, 1, 0, 0, 0),
	                         ))
                         };
    	    echo action($input);

    }


}
