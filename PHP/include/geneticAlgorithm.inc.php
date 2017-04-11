<?php 

	class GeneticAlgorithm {

		private $DEFAULT_CROSSOVER_PROBABILITY = 0.9;
	    private $DEFAULT_MUTATION_PROBABILITY = 0.01;
	    private $DEFAULT_POPULATION_SIZE = 30;

	    private $crossoverProbability;
	    private $mutationProbability;
	    private $populationSize;

	    private $mutationTimes;
	    private $currentGeneration;
	    private $maxGeneration;

	    private $pointNum;
	    private $population;
	    private $dist;

	    private $bestIndivial;
	    private $bestDist;
	    private $currentBestPosition;
	    private $currentBestDist;

	    private $values;
	    private $fitnessValues;
	    private $roulette;

	    private $isAutoNextGeneration;

	    function __construct() {

	    	$crossoverProbability = $this->DEFAULT_CROSSOVER_PROBABILITY;
			$mutationProbability = $this->DEFAULT_MUTATION_PROBABILITY;
			$populationSize = $this->DEFAULT_POPULATION_SIZE;
			$mutationTimes = 0;
			$currentGeneration = 0;
			$maxGeneration = 1000;
			$isAutoNextGeneration = false;
	    }

	    public static function getInstance() {
	    	//return GeneticAlgorithmHolder::instance;
	    	return new GeneticAlgorithm();
	    }

	    public function tsp($matrix /* [][] = array(array()) */) {

	    	$this->dist = $matrix;
	    	$this->pointNum = count($matrix);
	    	$this->init();

	    	if ( $this->isAutoNextGeneration ) {

	    		$i = 0;
	    		while( $i++ < $this->maxGeneration ) {
	    			$this->nextGeneration();
	    		}
	    	}
	    	$this->isAutoNextGeneration = false;
	    	return $this->getBestIndividual();
	    }

	    private function init() {

	    	$this->mutationTimes = 0;
	    	$this->currentGeneration = 0;
	    	$this->bestIndivial = null;
	    	$this->bestDist = 0;
	    	$this->currentBestPosition = 0;
	    	$this->currentBestDist = 0;
	    	
	    	$this->values = array();
	    	$this->fitnessValues = array();
	    	$this->roulette = array();
	    	$this->population = array();

	    	for( $i = 0; $ < $this->populationSize; $i++ ) {
	    		$this->population[$i] = $this->randomIndividual($this->pointNum);
	    	}
	    	$this->evaluateBestIndividual();
	    } 

	    public function nextGeneration() {

	    	$this->currentGeneration++;
	    	$this->selection();
	    	$this->crossover();
	    	$this->mutation();
	    	$this->evaluateBestIndividual();
	    	return getBestIndividual();
	    }

	    private function selection() {

	    	$parents = array();
	    	$initnum = 4;
	    	$parents[0] = $this->population[$this->currentBestPosition];
	    	$parents[1] = $this->exchangeMutate(array_merge(array(), $this->bestIndivial));
	    	$parents[2] = $this->insertMutate(array_merge(array(), $this->bestIndivial));
	    	$parents[3] = array_merge(array(), $this->bestIndivial);
	   		setRoulette();

	   		for ( $i = $initnum; $i < $this->populationSize; $i++ ) { 
	   			$parents[$i] = $this->population[wheelOut(rand())];
	   		}
	   		$this->population + $parents
	    }

	    private function setRoulette() {

	    	for ( $i = 0; $i < $this->vales->length ; $i++) { 
	    		#
	    		//
	    	}
	    }
	}


 ?>