<?php
/**
 * Movimiento Libre - Nemosintesis40
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
 * Clase Nemosintesis40
 */
class Nemosintesis40 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre          = 'Nemosíntesis 4.0';
        $this->fecha           = '2007-05-20T00:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'nemosintesis-4.0';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Después de que termina un largo trabajo siente un agradable regocijo al ver su creación andando. Con ese gusto me complace que se haya actualizado el sistema de la empresa donde trabajo Nemosíntesis de la versión 3.2 a la 4.0.';
        $this->claves          = 'Desarrollo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/Nemosintesis40.md';
        // Para el Organizador
        $this->categorias      = array('Desarrollo');
    } // constructor

} // Clase Nemosintesis40

?>
