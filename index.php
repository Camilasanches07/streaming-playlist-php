<?php

declare(strict_types=1);

require_once __DIR__ . '/Reproduzivel.php';
require_once __DIR__ . '/Midia.php';
require_once __DIR__ . '/VideoCurto.php';

$videoCurto = new VideoCurto(
    titulo: 'Dica rápida de PHP',
    criador: 'Camila',
    duracao: 60,
    urlVideo: 'https://exemplo.com/video',
    urlThumbnail: 'https://exemplo.com/thumb.jpg'
);

echo $videoCurto->reproduzir() . PHP_EOL;