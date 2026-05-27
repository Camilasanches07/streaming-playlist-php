<?php

declare(strict_types=1);

require_once 'Midia.php';
require_once 'Reproduzivel.php';

class Podcast extends Midia implements Reproduzivel
{
    public function __construct(
        string $tituloEpisodio,
        string $host,
        int $duracao,
        private string $nomePodcast,
        private string $dataPublicacao
    ) {
        parent::__construct($tituloEpisodio, $host, $duracao);
    }

    public function getNomePodcast(): string
    {
        return $this->nomePodcast;
    }

    public function getDataPublicacao(): string
    {
        return $this->dataPublicacao;
    }

    public function reproduzir(): string
    {
        return "Ouvindo o podcast: '" . $this->getTitulo() . "' apresentado por " . $this->getCriador() . ".";
    }
}
