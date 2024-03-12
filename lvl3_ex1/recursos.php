<?php 

enum Tema {
    case PHP;
    case CSS;
    case HTML;
    case SQL;
    case Laravel;
}

enum Type {
    case Fichero;
    case Articulo;
    case Video;
}

class Recurso {

    public string $nombre;
    public Tema $tema;
    public string $url;
    public Type $type;

    public function __construct(string $nombre, Tema $tema, string $url, Type $type){
        $this->nombre = $nombre;
        $this->tema = $tema;
        $this->url = $url;
        $this->type = $type;
    }
   
}

$recurso1 = new Recurso("Aprende CSS fácilmente",Tema::CSS,"www.aprendeconmaik.com",Type::Articulo);

?>
