<?php 
//Tuliskan kode anda di bawah ini
$var=$_GET['angka'];
for ($i=1; $i<$var ; $i++) { 
	for ($j=$i; $j<$var ; $j++) { 
		# code...
	echo "*";
	}
	echo "<br>";
}
$n = 0;
for ($i=0; $i < $var ; $i++) { 
	# code...
	$n = ($n+2);
	echo $n;
}
echo "<br>";
$n = 0;
for ($i=0; $i < $var ; $i++) { 
	# code...
	$n = ($n+2);
	echo $n-1;
}
?>
