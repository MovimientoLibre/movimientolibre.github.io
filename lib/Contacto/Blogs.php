<?php
/**
 * Movimiento Libre - Blogs
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

namespace Contacto;

/**
 * Clase Blogs
 */
class Blogs extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Blogs';
        $this->autor                      = 'Movimiento Libre';
     // $this->fecha                      = '2016-00-00T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'blogs';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Sitios web de amigos que recomiendo.';
        $this->claves                     = 'Blogs, Sitios Web, Amigos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Contacto/Blogs.md';
        // Para el Organizador
        $this->categorias                 = array('Contacto');
    } // constructor

} // Clase Blogs

?>
