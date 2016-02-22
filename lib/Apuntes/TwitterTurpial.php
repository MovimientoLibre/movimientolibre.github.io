<?php
/**
 * Movimiento Libre - TwitterTurpial
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

namespace Apuntes;

/**
 * Clase TwitterTurpial
 */
class TwitterTurpial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Instalación de Turpial (cliente de Twitter) en Gentoo Linux';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2010-10-18T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'twitter-turpial';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Turpial es un proyecto que busca ser un cliente alternativo para Twitter. Está escrito en Python, tiene como meta ser una aplicación con bajo consumo de recursos y que se integre al escritorio del usuario pero sin renunciar a ninguna funcionalidad.';
        $this->claves                     = 'Gentoo Linux, Turpial, Python, Twitter';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/TwitterTurpial.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux');
    } // constructor

} // Clase TwitterTurpial

?>
