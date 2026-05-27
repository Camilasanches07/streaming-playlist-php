<?php

declare(strict_types=1);

require_once 'Midia.php';
require_once 'Reproduzivel.php';
require_once 'Musica.php';
require_once 'Podcast.php';
require_once 'VideoCurto.php';
require_once 'Playlist.php';

$musica = new Musica('Bohemian Rhapsody', 'Queen', 354, '1975-10-31');
$podcast = new Podcast('Episodio 1', 'Joao Silva', 3600, 'Tech Cast', '2024-01-15');
$video = new VideoCurto('Dica rapida de PHP', 'Camila', 60, 'https://exemplo.com/video');

$playlist = new Playlist('Minha Playlist');
$playlist->adicionar($musica);
$playlist->adicionar($podcast);
$playlist->adicionar($video);

$playlist->reproduzirTodos();
