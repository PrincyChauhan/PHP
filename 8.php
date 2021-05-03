<?php
$k=1; 
$num = 97;
for ($i=1; $i<=5; $i++)	
{	echo "<br>";

for($j=1;$j<=$i;$j++)	  
	{	
    	if ($i % 2 ==0)
		{  $ch = chr($num);
         echo $ch." ";
         $num = $num + 1; }
	
    	else 
        {echo $k." ";
        $k++;  }
  	
		
	} 
 }
?>