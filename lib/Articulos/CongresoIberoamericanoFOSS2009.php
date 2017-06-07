<?php
/**
 * Movimiento Libre - Congreso Iberoamericano FOSS 1.0
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
 * Clase CongresoIberoamericanoFOSS2009
 */
class CongresoIberoamericanoFOSS2009 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Congreso Iberoamericano FOSS 1.0';
        $this->fecha                      = '2009-12-25T16:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'congreso-iberoamericano-foss-2009';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los días 30 de noviembre y 1 de diciembre de 2009 se efectuó el [Primer Congreso Iberoamericano de Software Libre](http://www.estudiosdeldesarrollo.net/foss/). Cinco miembros del [GULAG](http://www.gulag.org.mx/) estuvimos presentes en lo que fué el evento más importante del Software Libre del año.';
        $this->claves                     = 'Congreso, Software Libre, Zacatecas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/CongresoIberoamericanoFOSS2009.md';
        // Para el Organizador
        $this->categorias                 = array('Conferencias');
    } // constructor

} // Clase CongresoIberoamericanoFOSS2009

?>
