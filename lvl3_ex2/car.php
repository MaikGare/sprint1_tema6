<?php 

require_once "turbo.php";

class Car{

    use Turbo;

    public string $marca;
    public string $matricula;
    public string $tipusCombustible;
    public int $velocitatMax;

}
?>