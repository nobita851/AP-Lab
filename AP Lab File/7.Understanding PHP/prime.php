<!DOCTYPE html>
<html>
<head></head>
<body>
<h1>First 20 Prime Numbers</h1>
<?php 
    function prime($n)
    {  
    	for ($i = 2; $i <= $n/2; $i++) 
        	if ($n % $i == 0) 
            	return 0;
    	return 1; 
	}  
$c = 1;
for($i = 2;$c <= 20; $i++) 
if (prime($i) == 1)
{ 
	echo "$i,";
	$c=$c+1;
} 
?> 
</body>
</html>