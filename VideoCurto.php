<?php

declare(strict_types=1);

require_once __DIR__ . '/Midia.php';
require_once __DIR__ . '/Reproduzivel.php';

class VideoCurto extends Midia implements Reproduzivel
{
    private string $urlVideo;
    private int $visualizacoes;
    private bool $estaTocando;

    public function __construct(string $titulo, string $criador, int $duracao, string $urlVideo)
    {
        parent::__construct($titulo, $criador, $duracao);
        $this->urlVideo = $urlVideo;
        $this->visualizacoes = 0;
        $this->estaTocando = false;
    }

    public function reproduzir(): string
    {
        if ($this->estaTocando) {
            return "O vídeo '{$this->getTitulo()}' já está sendo reproduzido.\n";
        }

        $this->estaTocando = true;
        $this->visualizacoes++;

        return "Reproduzindo: '{$this->getTitulo()}' ({$this->getDuracao()}s)\n"
            . "Criador: {$this->getCriador()}\n"
            . "Fonte: {$this->urlVideo}\n"
            . "Total de visualizações: {$this->visualizacoes}\n";
    }
}
?>
