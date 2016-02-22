<?php
/**
 * Movimiento Libre - PHP4HaMuertoLargaVidaAPHP5
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
 * Clase PHP4HaMuertoLargaVidaAPHP5
 */
class PHP4HaMuertoLargaVidaAPHP5 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'PHP4 ha muerto, larga vida a PHP5';
     // $this->autor           = 'Autor';
        $this->fecha           = '2008-02-02T11:20';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'php4-ha-muerto-larga-vida-a-php5';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Se hace un llamado a migrar los sistemas web que aun funcionen con la versión cuatro de PHP a la cinco.';
        $this->claves          = 'PHP';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/PHP4HaMuertoLargaVidaAPHP5.md';
        // Para el Organizador
        $this->categorias      = array('Desarrollo', 'PHP');
    } // constructor

} // Clase PHP4HaMuertoLargaVidaAPHP5

?>
