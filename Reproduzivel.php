<?php
declare(strict_types=1);

interface Reproduzivel
    {
        public function reproduzir(): string;
    }
abstract class Midia implements Reproduzivel
    {
        public function __construct(
            private string $titulo,
            private string $criador,
            private int $duracao
        ) {
        }
        public function getTitulo(): string
        {
            return $this->titulo;
        }
        public function getCriador(): string
        {
            return $this->criador;
        }
        public function getDuracao(): int
        {
            return $this->duracao;
        }
    }