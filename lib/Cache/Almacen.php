<?php
namespace TALLER\Cache;
use TALLER\Comun\Todo;
/**
 * Clase Almacen ejemplo extends clases y usando espacio de nombres
 * @author: Gregorio Bolívar <elalconxvii@gmail.com>
 * @author: Blog: <http://gbbolivar.wordpress.com>
 * @Creation Date: 29/08/2017
 * @version: 0.1
 */
class Almacen extends Todo
{
	static public function run()
	{
		 $valor = Almacen::paso();
		 Todo::printAll($valor);
	}

	static public function paso(){
		return "llego sin problema";
	}
}