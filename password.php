<?php

namespace pgrandom;

class password {
	/**
	 * options
	 */
	private $length = 0;
	private $hasSymbol = false;
	private $hasNumber = false;
	/**
	 * ends
	 */

	/**
	 * data
	 */
	private $charecterSet = array(
		'numbers' => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9),
		'symbols' => array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "-", "=", "+"),
		'charactersCap' => array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"),
		'charactersSma' => array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z")

	);

	public $random = '';
	/**
	 * ends
	 */


	public function __construct($length = 16, $hasNumber = true, $hasSymbol = false) {
		$this->length = $length;
		$this->hasSymbol = $hasSymbol;
		$this->hasNumber = $hasNumber;

		$this->generate();
	}
	public function generate(): string {
		$selectionSet = array("charactersCap", "charactersSma");
		if ($this->hasNumber === true) array_push($selectionSet, 'numbers');
		if ($this->hasSymbol === true) array_push($selectionSet, 'symbols');
		$this->random = '';

		for ($i = 0; $i < $this->length; $i++) {
			/**
			 * deciding which character subset to select
			 */
			$targetSetIndex  = rand(0, count($selectionSet) - 1);
			$subSetName = $selectionSet[$targetSetIndex];
			$charecterSubSet = $this->charecterSet[$subSetName];
			/** ends */


			$this->random = $this->random . $charecterSubSet[rand(0, count($charecterSubSet) - 1)];
		}

		return $this->random;
	}
	public function __toString() {
		return $this->random;
	}
}
