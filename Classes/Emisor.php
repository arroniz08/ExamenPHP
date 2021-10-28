<?php

class Emisor extends XML
{

    //public $regimenFiscal;

    public function __construct() //tenia la palabra reservada protected por lo que al momento de tratar de instanciar el objeto marcaba error
    {
        $this->atributos = [];
        $this->atributos["Rfc"] = ''; //Se agrego el atributo RFC
        $this->atributos['Nombre'] = '';
        $this->atributos['RegimenFiscal'] = '';
        $this->rules = [];
        $this->rules['Rfc'] = 'R'; //Se puso como requerido
        $this->rules['Nombre'] = 'R';
        $this->rules['RegimenFiscal'] = 'R';
    }

    public function getNode()
    {
        $xml = '<cfdi:Emisor ' . $this->getAtributes() . ' />';
        return $xml;

    }
}
