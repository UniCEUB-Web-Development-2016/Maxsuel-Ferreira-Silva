<?php


class User{


	private $nme_user;
	private $pass_user;
	private $dta_nasc_user;
	private $sex_user;
	private $ip_user;

	public function__construct($nme_user, $pass_user, $dta_nasc_user, $sex_user, $ip_user){
		$this->setUserName($nme_user);
		$this->setUserPass($senha_user);
		$this->setUserDtaNasc($dta_nasc_user);
		$this->setSexUser($sex_user);
		$this->set_students($ip_user);

    }

    	public function getUserName(){
		return $this->nme_user;

    }
	public function getUserPass(){
		return $this->pass_user;

    }

	public function getUserDtaNasc(){
		return $this->dta_nasc_user;

    }
	public function getSexUser(){
		return $this->sex_user;

    }
	public function getUserIp(){
                  return $this->ip_user;

    }
    	private function setUserName($nme_user){
		$this->nme_usuario = $nme_usuario;

    }

    	private function setUserPass($pass_user){
		$this->pass_user = $pass_user;

    }

	private function setUserDtaNasc($dta_nasc_user){
		$this->dta_nasc_user = $dta_nasc_user;

    }

	private function setSexUser($sex_user){
            		$this->sex_user = $sex_user;
    }

    	

        private function setUserIp($ip_user){

               $this->ip_user = $ip_user;
    }

}