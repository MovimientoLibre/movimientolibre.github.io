<?php
/**
 * Movimiento Libre - GPL2
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

namespace Licencias;

/**
 * Clase GPL2
 */
class GPL2 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'GNU General Public Licence v2';
     // $this->autor                      = 'guivaloz';
     // $this->fecha                      = '2016-00-00T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'gpl-2';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Free Software Licence by Free Software Fundation.';
        $this->claves                     = 'GNU,GPL,Software,Libre';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Licencias/GPL2.md';
        // Para el Organizador
        $this->categorias                 = array('Licencias');
    } // constructor

} // Clase GPL2

?>
