<?php
	$tanggal = date('d-m-Y');
	$day = date('D', strtotime($tanggal));
	$dayList = array(
    	'Sun' => 'Minggu',
    	'Mon' => 'Senin',
    	'Tue' => 'Selasa',
    	'Wed' => 'Rabu',
    	'Thu' => 'Kamis',
    	'Fri' => 'Jumat',
    	'Sat' => 'Sabtu'
	);
	echo " $dayList[$day], "  .$tanggal;
	echo "<hr>"
?>