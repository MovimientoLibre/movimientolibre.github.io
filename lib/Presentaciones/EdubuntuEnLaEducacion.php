<?php
/**
 * Movimiento Libre - Edubuntu en la educación
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
 * Clase EdubuntuEnLaEducacion
 */
class EdubuntuEnLaEducacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Edubuntu en la educación';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2009-10-28T01:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'edubuntu-en-la-educacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Presentación sobre lo que es el Software Libre, Ubuntu y Edubuntu, haciendo énfasis en su aplicación para el ámbito educativo.';
        $this->claves                     = 'Presentacion, Edubuntu, Ubuntu, Educacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/EdubuntuEnLaEducacion.md';
        // Para el Organizador
        $this->categorias                 = array('GNU Linux', 'Ubuntu', 'Educación');
    } // constructor

} // Clase EdubuntuEnLaEducacion

?>
