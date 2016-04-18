<?php

class Competition{

	private $nme;
	private $game;
	private $ip;
	private $description;


	public function__construct($nme, $game, $ip, $description){
	self::setNome($nome);	
	self::setLetra$letra);
	self::setCodGenero($cod_genero);
	self::setCodCantor($cod_cantor);

	
   }

	public function getNome(){
		return $this->nme;

   }

	public function getGame(){
		return $this->game;
   }



	public function getIp(){
		return $this->IP;

   }

	public function getDescripion(){
		return $this->descripion;
   }

	public function setNome($nme){
		$this->nme = $nme;
   }
	

	public function setGame($game){
		$this->game = $game;
   }
	

	public function setIp($ip){
		$this->ip = $ip;
   }



	public function setDescription($description){
		$this->description = $description;
   }

}