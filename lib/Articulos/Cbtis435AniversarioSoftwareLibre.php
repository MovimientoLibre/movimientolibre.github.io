<?php
/**
 * Movimiento Libre - Software Libre en el 35 Aniversario del CBTiS 4
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
 * Clase Cbtis435AniversarioSoftwareLibre
 */
class Cbtis435AniversarioSoftwareLibre extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Software Libre en el 35 Aniversario del CBTiS 4';
     // $this->autor           = 'Autor';
        $this->fecha           = '2008-10-28T23:00';
        // El nombre del archivo a crear
        $this->archivo         = 'cbtis4-35-aniversario-software-libre';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El 28 de octubre del presente, tuve el honor de participar en los eventos que con motivo del XXXVII Aniversario del CBTiS 4 con la ponencia Software Libre.';
        $this->claves          = 'Conferencia, Software Libre, CBTiS 4';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/Cbtis435AniversarioSoftwareLibre.md';
        // Para el Organizador
        $this->categorias      = array('Conferencias');
    } // constructor

} // Clase Cbtis435AniversarioSoftwareLibre

?>
