<?php
    class ClearPar
    {
       
        function build($entrada)
        {
            //$entrada = "()())()";            
            $j=0;    
            for($i=0,$j=0 ; $i < strlen($entrada) ; $i++ )
            {
                if (strcmp('(', $entrada[$i])==0)
                {
                    $abierto=true;
                    $cerrado=false;
                                          
                    for($j ; $j < strlen($entrada);$j++)                    
                    {
                        if((strcmp(')', $entrada[$j])==0) && $abierto==true)
                        {                        
                            if ($j>$i && $cerrado==false)
                            {
                                echo "()";
                                $abierto=false;
                                $cerrado=true;
                                $j=$j+1;
                                break;
                            }
                        }

                    }
                    
                }
                

            }

            echo "<br>";
            return;
        }
    }


$objeto = new ClearPar();
$objeto->build("()())()");
$objeto->build("()(()");
$objeto->build(")(");
$objeto->build("((()");
$objeto->build("()())(((((");
?>