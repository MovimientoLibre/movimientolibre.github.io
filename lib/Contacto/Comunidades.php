<?php
/**
 * Movimiento Libre - Comunidades
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
 * Clase Comunidades
 */
class Comunidades extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título
        $this->nombre                     = 'Comunidades';
        // El nombre del archivo a crear
        $this->archivo                    = 'comunidades';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Comunidades de interés.';
        $this->claves                     = 'Grupos, Comunidades';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Contacto/Comunidades.md';
        // Para el Organizador
        $this->categorias                 = array('Contacto');
    } // constructor

} // Clase Comunidades

?>
