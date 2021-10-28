EXAMEN SIMPLE
------------

El examen debe regresar la siguiente información:

```
"<?xml version="1.0" encoding="UTF-8"?> <cfdi:Comprobante  xmlns:cfdi="http://www.sat.gob.mx/cfd/3"  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sat.gob.mx/cfd/3 http://www.sat.gob.mx/sitio_internet/cfd/3/cfdv33.xsd" Version="3.3" Fecha="2021-10-06 11:00:00" Sello=" " NoCertificado="00000010101010101" Certificado=" " SubTotal="100" Moneda="MXN" Total="116" MetodoPago="PUE" FormaPago="01" TipoDeComprobante="i" LugarExpedicion="64000"  ><cfdi:Emisor Rfc="TME960709LR2" Nombre="Tracto Camiones" RegimenFiscal="612"  /></cfdi:Comprobante>"

Un xml en String, impreso por medio del comando.

php index.php sin parametros.

Los datos del Comprobante se encuentran en un Array de Ejemplo.

La evaluación cuenta con los siguientes puntos.


1.- Encontrar y resolver los Bugs de PHP.
2.- Usar las funciones de la clase XML para setear correctamente los attributos.
3.- Los datos del array son requeridos y se deben solicitar si faltan.
4.- Se revisará cualquier anotación de la razón de como se resolvió el problema.
5.- Se evaluará el entendimiento básico de PHP y sus propiedades.
