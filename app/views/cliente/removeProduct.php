<?
/* 	La entrada a este archivo $ _POST ['productIdToRemove']
Este archivo sólo se actualiza la base de datos, es decir, eliminar un producto de la cesta de la compra. Se emite la cadena "OK" si todo es correcto.
*/

if(!isset($_POST['productIdToRemove']))die("Not OK");	/* No product id sent as input to this file */

// Add your db queries here

echo "OK";


?>