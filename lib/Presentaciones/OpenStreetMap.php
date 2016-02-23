<?php
/**
 * Movimiento Libre - OpenStreetMap
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

namespace Presentaciones;

/**
 * Clase OpenStreetMap
 */
class OpenStreetMap extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'OpenStreetMap';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2014-01-19T20:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'openstreetmap';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Presentación sobre OpenStreetMap, la Wikipedia de los mapas.';
        $this->claves                     = 'Presentacion, OpenStreetMap, GIS';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/OpenStreetMap.md';
        // Para el Organizador
        $this->categorias                 = array('OpenStreetMap');
    } // constructor

} // Clase OpenStreetMap

?>