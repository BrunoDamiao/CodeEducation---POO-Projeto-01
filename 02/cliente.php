<?php

Class Cliente
{
	private $nome;
	private $cpf;
	private $endereco;
	private $star;

	public function __construct($nome, $cpf, $endereco, $star)
	{
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->endereco = $endereco;
		$this->star = $star;
	}

	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome($nome)
	{
	    $this->nome = $nome;
	    return $this;
	}

	public function getCpf()
	{
	    return $this->cpf;
	}
	
	public function setCpf($cpf)
	{
	    $this->cpf = $cpf;
	    return $this;
	}

	public function getEndereco()
	{
	    return $this->endereco;
	}
	
	public function setEndereco($endereco)
	{
	    $this->endereco = $endereco;
	    return $this;
	}

	public function getStar()
	{
	    return $this->star;
	}
	
	public function setStar($star)
	{
	    $this->star = $star;
	    return $this;
	}

}


/*$clie = new cliente();
$clie->setNome("Bruno Damião")
	 ->setCpf("123.321.456-01")
	 ->setEndereco("Rua A, nº 354 - Centro, Ilhéus-BA")
	 ->setStar(2)
;*/

// echo 'x '.$clie;
/*
$clientes = array(
					0 => new Cliente("Nilton Morais", "123.321.456-01", "Rua A, nº 354 - Centro, Ilhéus-BA"),
                    1 => new Cliente("Jéssica Abreu", "789.541.369-01", "Rua B, nº 147 - Coceição, Itabuna-BA"),
                    2 => new Cliente("Maria do Carmo", "987.741.364-05", "Rua C, nº 451 - Mangabinha, Itabuna-BA"),
                    3 => new Cliente("João Pedro", "854.001.140-01", "Rua D, nº 09 - Centro, Contagem-MG"),
                    4 => new Cliente("Manoel Cruz", "059.905.154-01", "Rua Primeiro de Maio, nº 25 - Fátima, Itabuna-BA"),
                    5 => new Cliente("Eva Alves", "212.413.001-01", "Rua Pará de Minas, nº 354 - Centro, Contagem-MG"),
                    6 => new Cliente("Joaquim Costa", "301.102.301-01", "Rua E, nº 256 - Centro, Camacan-BA"),
                    7 => new Cliente("Eliomar Morais", "103.054.193-01", "Rod. Ilhéus-Itabuna, SN - Salobrinho, Ilhéus-BA"),
                    8 => new Cliente("Carla Amaral", "123.789.257-79", "Rua F, nº 123 - Centro, Ilhéus-BA"),
                    9 => new Cliente("Jeniffer Araújo", "231.321.412-01", "Rua G, nº 314 - Centro, Salvador-BA"),
            );

echo "<pre>";
print_r($clientes);

*/