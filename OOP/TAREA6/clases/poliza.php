<?php
require "vehiculo.php";
require "tomador.php";
class Poliza{
    const BASE = 200;
    private $tomador;
    private $vehiculo;
    private $modalidad;
    public function __construct(Tomador $tomador,Vehiculo $vehiculo, $modalidad){
        $this->tomador = $tomador;
        $this->vehiculo = $vehiculo;
        if ($modalidad != "I" && $modalidad != "T"){
            $this->modalidad = "B";
        }
        else{
            $this->modalidad = $modalidad;
        }
    }
    public function modalidadTexto(){
        $texto = "";
        switch ($this->modalidad){
            case "T":
                $texto = "Todo riesgo";
                break;
            case "I":
                $texto = "Intermedio";
                break;
            case "B":
                $texto = "Basico";
                break;
        }
        return $texto;
    }

    public function precio(&$detalle = null){
        $precio = self::BASE;
        #$detalle = [];
        if ($this->tomador->edadCarnet()<10 ){
            $precio *= 2;
            $detalle[] = ["Concepto" => 'Menos de 10 años de canet', "Importe" => self::BASE, "Acumulado" => $precio];
        }
        if ($this->tomador->getSexo() == 'M') {
            $precio2 = $precio;
            $precio -= $precio * 0.1;
            $detalle[] = ['Concepto' => 'Descuento por igualdad de género', 'Importe' => -$precio2 * 0.1, 'Acumulado' => $precio];
        }
        if ($this->vehiculo->edadVehiculo() > 10) {
            $precio += 100;
            $detalle[] = ['Concepto' => 'Suplemento por antigüedad', 'Importe' => 100, 'Acumulado' => $precio];
        }
        if ($this->vehiculo->getCombustible() == 'E') {
            $precio *= 0.7;
            $detalle[] = ['Concepto' => 'Descuento por vehículo ecológico', 'Importe' => -$precio * 0.3, 'Acumulado' => $precio];
        } 
        elseif ($this->vehiculo->getCombustible() == 'D') {
            $precio *= 1.3;
            $detalle[] = ['Concepto' => 'Suplemento por vehículo contaminante', 'Importe' => $precio * 0.3, 'Acumulado' => $precio];
        }
        if ($this->modalidad == 'I') {
            $precio += 200;
            $detalle[] = ['Concepto' => 'Suplemento por modalidad Intermedia', 'Importe' => 200, 'Acumulado' => $precio];
        } 
        elseif ($this->modalidad == 'T') {
            $precio *= 2;
            $detalle[] = ['Concepto' => 'Suplemento por modalidad Todo Riesgo', 'Importe' => $precio, 'Acumulado' => $precio];
        }

        #if ($detalle !== null) {
        #    $detalle = $concepto;
        #}
        return $precio;
    }
    public function detalle() {
        $detalle = [];
        $this->precio($detalle);
        $tabla = "<table border='1'><tr><th>Concepto</th><th>Importe</th><th>Acumulado</th></tr>";
        foreach ($detalle as $row) {
            $tabla .= "<tr><td>{$row['Concepto']}</td><td>{$row['Importe']}</td><td>{$row['Acumulado']}</td></tr>";
        }
        $tabla .= "</table>";
        return $tabla;
    }
    public function ficha() {
        return "<h3>Póliza</h3><p>Tomador: ".$this->tomador->ficha()."</p><p>Vehículo: ".$this->vehiculo->ficha()."</p><p>Modalidad: ".$this->modalidadTexto()."</p><p>Precio: ".$this->precio()."</p><p>Detalle: ".$this->detalle()."</p>";
    }
}

