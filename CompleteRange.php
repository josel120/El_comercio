<?php
    
    class CompleteRange
    {
        function build($entrada)
        {                        
            $salida="[".$entrada[0];
                      
            for($i=0 ; $i < count($entrada) -1 ; $i++ )
            {
                $menor=$entrada[$i];
                $mayor=$entrada[$i+1];
                $resta= $mayor - $menor;
                
                if($resta > 1)
                {
                    while($resta > 1)
                    {
                        $menor=$menor+1;
                        $salida.=",".$menor;                        
                        $resta= $mayor - $menor;
                    }                    
                }                
                $salida.=",".$mayor;                
            }
            echo $salida."]";               
            return;
        }
    }
    
    $objeto = new CompleteRange();
   // $objeto->build([1,2,4,5,7,9]);
   // $objeto->build([1, 2, 4, 5]);
    $objeto->build([55, 58, 60]);

?>