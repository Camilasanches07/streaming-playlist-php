<?php
declare(strict_types=1);

require_once 'Midia.php'; 

class Podcast extends Midia 
{
    public function __construct(
        string $tituloEpisodio, 
        string $host, 
        int $duracao, 
        public string $nomePodcast, 
        public string $dataPublicacao
    ) {
        parent::__construct($tituloEpisodio, $host, $duracao);
    }

    public function reproduzir(): string 
    {
        return "Ouvindo o podcast: '" . $this->getTitulo() . "' apresentado por " . $this->getCriador() . ".";
    }
}
