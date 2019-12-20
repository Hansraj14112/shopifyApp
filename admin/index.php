<?php
function pypart($n) 
{ 
        echo"+-----+";
        echo "<br>";
    for ($i = 0; $i < $n; $i++) {
     for($j = $i; $j <= $i; $j++ ) 
        { 
            if($i % 2 == 0)
            {
              echo " \ "; 
            }
            else
            {
            	echo" / ";
            }
            for($k = 0; $k<=4; $k++)
            {
            	echo" &nbsp ";
            }
    if($i % 2 == 0)
            {

            	echo " /"; 
            }
            else
            {
            	echo" \ ";
            }
        } 
    echo "<br>"; 
          } 
        echo"+-----+";
        echo "<hr>";
    	} 
  
    // Driver Code 
    $n = 7; 
     pypart($n); 
?> 