<?php
/**
 * Movimiento Libre - GentooPortageLANServer
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * Clase GentooPortageLANServer
 */
class GentooPortageLANServer extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Gentoo Linux - Servidor local de portage';
        $this->autor                      = 'guivaloz';
        $this->fecha                      = '2017-03-23T07:42';
        // El nombre del archivo a crear
        $this->archivo                    = 'gentoo-portage-lan-server';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Pasos para configurar un servidor del portage de Gentoo en la red local.';
        $this->claves                     = 'Gentoo, Linux, Portage, LAN, Local, Server';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/GentooPortageLANServer.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux');
    } // constructor

} // Clase GentooPortageLANServer

?>
