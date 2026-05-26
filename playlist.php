<?php

declare(strict_types=1);

namespace Models;

use Interfaces\Reproduzivel;

abstract class Midia implements Reproduzivel
{
    private string $titulo;
    private string $autor;
    private int $duracaoSegundos;

    public function __construct(
        string $titulo,
        string $autor,
        int $duracaoSegundos
    ) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->duracaoSegundos = $duracaoSegundos;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function getDuracaoSegundos(): int
    {
        return $this->duracaoSegundos;
    }

    protected function formatarDuracao(): string
    {
        $minutos = floor($this->duracaoSegundos / 60);
        $segundos = $this->duracaoSegundos % 60;
        return sprintf("%d:%02d", $minutos, $segundos);
    }

    abstract public function getTipo(): string;
}