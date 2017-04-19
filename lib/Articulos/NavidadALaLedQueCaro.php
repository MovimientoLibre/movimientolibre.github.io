<?php
/**
 * Movimiento Libre - NavidadALaLedQueCaro
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package MovimientoLibre
 */

namespace Articulos;

/**
 * Clase NavidadALaLedQueCaro
 */
class NavidadALaLedQueCaro extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre          = 'Navidad a la LED... ¡que caro!';
        $this->fecha           = '2007-12-05 10:55';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'navidad-a-la-led-que-caro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Cuando comenzaro a venderse las series de luces led para navidad fueron realmente caras.';
        $this->claves          = 'Navidad, Leds';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/NavidadALaLedQueCaro.md';
        // Para el Organizador
        $this->categorias      = array('Vida Cotidiana');
    } // constructor

} // Clase NavidadALaLedQueCaro

?>
