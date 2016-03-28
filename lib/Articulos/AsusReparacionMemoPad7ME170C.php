<?php
/**
 * Movimiento Libre - Asus Reparacion Memo Pad 7 ME170C
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * Clase AsusReparacionMemoPad7ME170C
 */
class AsusReparacionMemoPad7ME170C extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Asus Reparacion Memo Pad 7 ME170C';
     // $this->autor                      = '';
        $this->fecha                      = '2016-03-28T10:49';
        // El nombre del archivo a crear
        $this->archivo                    = 'asus-reparacion-memo-pad-7-me170c';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Hace días mi tablet ASUS Memo Pad 7 me180c dejó de funcionar súbitamente después de una caída de no más de medio metro. Simplemente resbaló destrás de un buró pequeño con todo y funda protectora.';
        $this->claves                     = 'ASUS, Tablet, Memo Pad 7, Reparacion, Caida';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/AsusReparacionMemoPad7ME170C.md';
        // Para el Organizador
        $this->categorias                 = array('Hardware');
    } // constructor

} // Clase AsusReparacionMemoPad7ME170C

?>
