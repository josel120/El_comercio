<?php


class ChangeString 
{
    function build($entrada) //string cadena
    {
        $abecedario= "abcdefghijklmnñopqrstuvwxyz";
        $abecedarioM="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";       
        $cadena = "";
        

        for($i =0 ; $i < strlen($entrada); $i++) // entrada
        {
            for($j=0; $j < strlen($abecedario); $j++) //abecedario
            {
                $ban=false;
                            
                if(strcmp($abecedario[$j],$entrada[$i])==0)
                {   
                    if(strcmp($abecedario[$j],'z')==0)
                    {
                        $cadena .= $abecedario[0];

                    }
                    else
                    {
                            $cadena .= $abecedario[$j + 1];    
                    }                     
                    
                }
                elseif(strcmp($abecedarioM[$j],$entrada[$i])==0)
                {
                    if(strcmp($abecedarioM[$j],'Z')==0)
                    {
                        $cadena .= $abecedarioM[0];

                    }
                    else
                    {
                            $cadena .= $abecedarioM[$j + 1];    
                    }  

                }                
                else
                {
                    $ban=true;
                } 
                    
                                
                
            }
            if($ban==true)
                {
                    $cadena .= $entrada[$i];
                }
        
        }
        
       // echo "entrada ".$entrada." ----Salida = ".$cadena; 
    
        return $cadena;         
    }

}


$objeto = new ChangeString();
echo $objeto->build("52Z");



?>