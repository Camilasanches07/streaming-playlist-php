<? php

declare (strict_types=1);

class VideoCurto {
    private const LIMITE_DURACAO_SEGUNDOS = 90;

    public function __construct(
        private int $id;
        private string $titulo;
        private string $urlVideo;
        private int $duracao;
        private string $urlThumbnail = '';
        ) 
{
?>
