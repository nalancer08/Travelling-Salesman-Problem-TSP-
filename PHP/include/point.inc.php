<?php 

	class Point {

		public $X;
		public $y;

		function __construct($next = true) {

			if ( $next ) {

				$this->x = rand() + 1;
				$this->y = rand() + 1;

			}
		}

		public function toString() {
			return "Point{ x = {$this->x}, y = {$this->y} }";
		}

	}

 ?>