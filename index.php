<?php

include_once './CFDI.php';

header('Content-type: text/xml');
header('Content-Disposition: attachment; filename="resultado.xml"');

class Main
{
    private $cfdi_xml;
    private $array_data = [
        "Comprobante" => [
            "LugarExpedicion" => "64000",
            "TipoDeComprobante" => "i",
            "Moneda" => "MXN",
            "SubTotal" => "100",
            "Total" => "116",
            "FormaPago" => "01",
            "NoCertificado" => "00000010101010101",
            "Fecha" => "2021-10-06 11:00:00"
        ],
        "Emisor" => [
            "Rfc" => "TME960709LR2",
            "Nombre" => "Tracto Camiones s.a de c.v",
            "RegimenFiscal" => "612"
        ]
    ];

    public function __construct() //tenia la palabra reservada protected por lo que al momento de tratar de instanciar el objeto marcaba error
    {
        $this->cfdi_xml = new CFDI();
    }

    //final public static function createXML()  
    public function createXML()  //Estaba haciendo un llamado a un objeto que no pertenecia a la clase
    {
         //Obtener el XML por medio de la clase XML
         
         // error de sintaxis en las sentencias tanto del foreach como el del if
        foreach ($this->array_data as $key => $value) { 
            if ($key != 'Comprobante') {
                foreach ($value as $attribute => $value) {
                //Setear attributos
                   $this->cfdi_xml->emisor->setAtribute($attribute,$value);
                }
            } else {
                foreach ($value as $attribute => $value) {
                //Setear attributos
                   $this->cfdi_xml->comprobante->setAtribute($attribute,$value);
                }
            }
            
        }
        
        
         return $this->cfdi_xml->getNode();
        
    }
}

try {
    $main = new Main(); //Estaba mal el llamado del constructor de la clase Main
    $xmlFinal = $main->createXML();
    
 
    echo $xmlFinal;
   
    
} catch (Throwable $error) { 
    //Tenia mal el llamado de la excepcion... ademas que del php 5 para abajo se llamaba asi: Exception $error pero a partir del 
    // php 7 el llamado es: Throwable $error
    echo $error->getMessage();
}
