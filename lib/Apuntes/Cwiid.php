<?php
/**
 * Movimiento Libre - Cwiid
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
 * Clase Cwiid
 */
class Cwiid extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Instalación de CWiid 0.6.00: Wiimote en GNU/Linux';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2010-10-26T20:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'cwiid-0.6.00';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Pasos para instalar en Gentoo Linux el CWiid (versión 0.6.00) que es una colección de herramientas programadas en C para usar el wiimote.';
        $this->claves                     = 'Gentoo Linux, Wii, Wiimote, CWiid';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/Cwiid.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux');
    } // constructor

} // Clase Cwiid

?>
