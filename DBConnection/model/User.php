<?php

class User
{
	private $name;
	private $email;
	private $birthdate;
	private $sexo;
	private $password;



	public function __construct($name, $last_name,
	$email, $birthdate, $sexo, $password)
	{
		$this->name = $name;
		$this->last_name = $last_name;
		$this->email = $email;
		$this->birthdate = $birthdate;
		$this->sexo = $sexo;
		$this->password = $password;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getLastname()
	{
		return $this->last_name;
	}

	public function getSexo()
	{
		return $this->sexo;
	}

	public function getBirthdate()
	{
		return $this->birthdate;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getPassword()
	{
		return $this->password;
	}

}