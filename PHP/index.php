<?php 

	# Define the absolute path
	define( 'ABSPATH', dirname(__FILE__) );

	# Include required files
	include ABSPATH . '/include/point.inc.php';
	include ABSPATH . '/include/geneticAlgorithm.inc.php';
	include ABSPATH . '/include/geneticAlgorithmHolder.inc.php';

	/********************************************************************
	* 							Testing FFT Class                       *
	********************************************************************/

	$N = 40;
	$points = array();
	for ( $i = 0; $i < $N; $i++ ) {

		$point = new Point(true);
		$points[$i] = $point;
		//echo "Point {$i}: {$point->toString()}" . "<br>";
	}

	/** Method 1 */
	$ga1 = GeneticAlgorithm::getInstance();


 ?>