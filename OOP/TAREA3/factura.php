<?php
class Formulario {
    private $numero_factura;

    private $fecha_factura;

    private $nombre_cliente;

    private $direccion_cliente;

    private $nif_cif_cliente;

    private $servicio;

    private $precio_sin_iva;

    const NOMBRE = "TITANIC";

    const IVA = 10;

    const CIF = "A58818501";


    const DIRECCION = "C/Granola, 22 Silleiro, Pontevedra";
 
    public function __construct($n_factura,$fecha,$nombre_cli,$direccion_cli,$nif_cif_cli,$servicio,$precio_sin_iva) {
        $this->numero_factura= $n_factura;
        $this->fecha_factura= $fecha;
        $this->nombre_cliente= $nombre_cli;
        $this->direccion_cliente= $direccion_cli;
        $this->nif_cif_cliente= $nif_cif_cli;
        $this->servicio= $servicio;
        $this->precio_sin_iva= $precio_sin_iva;
    }

    private function precio_iva(){
        return $this->precio_sin_iva * (1 + self::IVA/100);
    }
    public function ficha(){
        $resultado = "<p><strong>Número de Factura:</strong> {$this->numero_factura}</p>";
        $resultado .= "<p><strong>Fecha de Factura:</strong> {$this->fecha_factura}</p>";
        $resultado .= "<p><strong>Nombre del Cliente:</strong> {$this->nombre_cliente}</p>";
        $resultado .= "<p><strong>Dirección del Cliente:</strong> {$this->direccion_cliente}</p>";
        $resultado .= "<p><strong>NIF/CIF del Cliente:</strong> {$this->nif_cif_cliente}</p>";
        $resultado .= "<p><strong>Servicio Realizado:</strong> {$this->servicio}</p>";
        $resultado .= "<p><strong>Precio sin IVA:</strong> {$this->precio_sin_iva} €</p>";
        $resultado .= "<p><strong>Precio con IVA:</strong> {$this->precio_iva()} €</p>";
        $resultado .= "<p><strong>Dirección del Cliente:</strong> {$this->direccion_cliente}</p>";
        $resultado .= "<h2>Datos de la Empresa</h2>";
        $resultado .= "<p><strong>Nombre:</strong> " . self::NOMBRE . "</p>";
        $resultado .= "<p><strong>CIF:</strong> " . self::CIF . "</p>";
        $resultado .= "<p><strong>Dirección:</strong> " . self::DIRECCION . "</p>";

        return $resultado;
    }
}
