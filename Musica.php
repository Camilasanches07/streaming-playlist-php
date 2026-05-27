<?php
declare(strict_types=1);

require_once 'Midia.php'; 

class Musica extends Midia 
{
    public function __construct(
        string $titulo, 
        string $artista, 
        int $duracao, 
        public string $dataPublicacao
    ) {
        parent::__construct($titulo, $artista, $duracao);
    }

    public function reproduzir(): string 
    {
        return "Tocando a música: '" . $this->getTitulo() . "' de " . $this->getCriador() . ".";
    }
}
