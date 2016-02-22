<?php
/**
 * Movimiento Libre - Enciclomedia
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
 * Clase Enciclomedia
 */
class Enciclomedia extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = '"Enciclomedia" en la Wikipedia';
     // $this->autor           = 'Autor';
        $this->fecha           = '2007-05-08T00:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'enciclomedia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'A cerca de que "rasuraron" la página que sobre el tema está en la Wikipedia, lo cual significa que alguien pretende que no estén a la vista diversas opiniones.';
        $this->claves          = 'Wikipedia, Enciclomedia, Libertad de Expresion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/Enciclomedia.md';
        // Para el Organizador
        $this->categorias      = array('Política', 'Educación');
    } // constructor

} // Clase Enciclomedia

?>
