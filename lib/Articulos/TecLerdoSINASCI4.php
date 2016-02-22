<?php
/**
 * Movimiento Libre - "Demostración de Programas Multimedia" en el SINASCI 2008
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
 * Clase TecLerdoSINASCI4
 */
class TecLerdoSINASCI4 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = '"Demostración de Programas Multimedia" en el SINASCI 2008';
     // $this->autor           = 'Autor';
        $this->fecha           = '2008-10-26T21:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'tec-lerdo-sinasci-4';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El Instituto Tecnológico Superior de Lerdo nos honró a César Espino (RIVE) y a su servidor con la invitación al VI Simposium Nacional de Sistemas Computacionales e Informática con la ponencia Demostración de programas de aplicación multimedia.';
        $this->claves          = 'Software Libre, Multimedia, Tec de Lerdo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/TecLerdoSINASCI4.md';
        // Para el Organizador
        $this->categorias      = array('Conferencias');
    } // constructor

} // Clase TecLerdoSINASCI4

?>
