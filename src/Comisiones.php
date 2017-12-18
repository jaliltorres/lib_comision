<?php

namespace lib\comision;

use App\ComisionOrganizador;
use App\ComisionEvento;

class Comisiones

{

  public $array_comision;
  public $array_comision_evento;

  public function comisionOrganizador($array, $organizador){

    $this->array_comision = $array;

    foreach ($this->array_comision as $com) {
      $comision = new ComisionOrganizador;
      $comision->id_organizador = $organizador;
      $comision->nombre_comision = $com['name'];
      $comision->tipo_comision = $com['type'];
      $comision->monto_comision = $com['mont'];

      $comision->save();
    }
  }


  public function comisionEvento($array, $evento){

    $this->array_comision_evento = $array;

    foreach ($this->array_comision_evento as $com) {
      $comision = new ComisionEvento;
      $comision->id_organizador = $com['id_organizador'];;
      $comision->id_evento = $evento;
      $comision->nombre_comision = $com['nombre_comision'];
      $comision->tipo_comision = $com['tipo_comision'];
      $comision->monto_comision = $com['monto_comision'];

      $comision->save();
    }
  }
}
