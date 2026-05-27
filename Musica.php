<?php

declare(strict_types=1);

require_once 'Midia.php';
require_once 'Reproduzivel.php';

class Musica extends Midia implements Reproduzivel
{
    public function __construct(
        string $titulo,
        string $artista,
        int $duracao,
        private string $dataPublicacao
    ) {
        parent::__construct($titulo, $artista, $duracao);
    }

    public function getDataPublicacao(): string
    {
        return $this->dataPublicacao;
    }

    public function reproduzir(): string
    {
        return "Tocando a música: '" . $this->getTitulo() . "' de " . $this->getCriador() . ".";
    }
}
