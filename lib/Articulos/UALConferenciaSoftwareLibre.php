<?php
/**
 * Movimiento Libre - "Software Libre" en la Universidad Autónoma de La Laguna - Congreso UAL 2008
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
 * Clase UALConferenciaSoftwareLibre
 */
class UALConferenciaSoftwareLibre extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = '"Software Libre" en la Universidad Autónoma de La Laguna - Congreso UAL 2008';
     // $this->autor           = 'Autor';
        $this->fecha           = '2007-12-10T13:10';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'ual-conferencia-software-libre';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El 7 de diciembre de 2007 participé en el Congreso UAL 2008 exponiendo el tema Software Libre ante alumnos, maestros y compañeros del GULAG.';
        $this->claves          = 'Software Libre, UAL, Confierencia';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/UALConferenciaSoftwareLibre.md';
        // Para el Organizador
        $this->categorias      = array('Conferencias');
    } // constructor

} // Clase UALConferenciaSoftwareLibre

?>
