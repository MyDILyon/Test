<?php
class Personnage {
	public $vie = 80;
	public $atk = 20;
	public $nom;
	public function __construct($nom ) {
		$this->nom = $nom;
	}
	public function parler() {
		echo ("Je suis un enchanteur");
	}
	public function toutNeuf() {
		$this->vie = 100;
	}
}