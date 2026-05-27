<?php

declare(strict_types=1);

require_once __DIR__ . '/Reproduzivel.php';

class Playlist
{
    private array $itens = [];

    public function __construct(
        private string $nome
    ) {
    }

    public function adicionar(Reproduzivel $midia): void
    {
        $this->itens[] = $midia;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function reproduzirTodos(): void
    {
        echo "Playlist: {$this->nome}" . PHP_EOL;
        echo str_repeat('-', 40) . PHP_EOL;

        foreach ($this->itens as $item) {
            echo $item->reproduzir() . PHP_EOL;
        }
    }
}
