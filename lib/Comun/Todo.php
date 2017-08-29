<?php 
namespace TALLER\Comun;
/**
 * Clase Todo convergen cosas comunes
 * @author: Gregorio Bolívar <elalconxvii@gmail.com>
 * @author: Blog: <http://gbbolivar.wordpress.com>
 * @Creation Date: 29/08/2017
 * @version: 0.1
 */
class Todo 
{
	
	static public function printAll($valor)
	{
		echo "<pre>"; print_r($valor); die();
	}
}