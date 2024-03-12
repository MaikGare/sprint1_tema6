<?php 

class Perro{

    private string $nombre;
    private string $color;
    private int $peso;

public function __construct(string $nombre, string $color, int $peso){
   $this->nombre = $nombre;
   $this->color = $color;
   $this->peso = $peso; 
}   

public function __toString(){
    $tamano = "";
    if ($this->peso < 20) {
        $tamano = "pequeño";
    } else {
        $tamano = "grande";
    }
    return $this->nombre . " es un perro de color " . $this->color . " y es " . $tamano;
}
}
?>