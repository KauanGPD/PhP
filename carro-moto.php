<?php

// Classe principal para veículos
class Veiculo {
    protected $marca;
    protected $modelo;
    protected $ano;
    protected $velocidadeMaxima;

    public function __construct($marca, $modelo, $ano, $velocidadeMaxima) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->velocidadeMaxima = $velocidadeMaxima;
    }

    public function exibirInformacoes() {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Ano: {$this->ano}";
    }

    public function acelerar($velocidade) {
        if ($velocidade <= $this->velocidadeMaxima) {
            return "Veículo acelerando para $velocidade km/h...";
        } else {
            return "Velocidade máxima atingida: {$this->velocidadeMaxima} km/h";
        }
    }
}

// Classe para carros, estendendo a classe Veiculo
class Carro extends Veiculo {
    private $tipo;

    public function __construct($marca, $modelo, $ano, $tipo) {
        parent::__construct($marca, $modelo, $ano, 220); // Exemplo de velocidade máxima para carros
        $this->tipo = $tipo;
    }

    public function exibirInformacoes() {
        return parent::exibirInformacoes() . ", Tipo: {$this->tipo}";
    }
}

// Classe para motos, também estendendo a classe Veiculo
class Moto extends Veiculo {
    private $cilindrada;

    public function __construct($marca, $modelo, $ano, $cilindrada) {
        parent::__construct($marca, $modelo, $ano, 300); // Exemplo de velocidade máxima para motos
        $this->cilindrada = $cilindrada;
    }

    public function exibirInformacoes() {
        return parent::exibirInformacoes() . ", Cilindrada: {$this->cilindrada}";
    }
}

// Exemplo de uso das classes
$carro = new Carro("Toyota", "Corolla", 2020, "Sedan");
echo $carro->exibirInformacoes() . "\n";
echo $carro->acelerar(180) . "\n"; // Acelerando até 180 km/h
echo $carro->acelerar(250) . "\n";  // Tentando acelerar além da velocidade máxima

$moto = new Moto("Honda", "CBR 600", 2019, "600cc");
echo $moto->exibirInformacoes() . "\n";
echo $moto->acelerar(250) . "\n"; // Tentando acelerar além da velocidade máxima
echo $moto->acelerar(280) . "\n"; // Acelerando até 280 km/h

?>
