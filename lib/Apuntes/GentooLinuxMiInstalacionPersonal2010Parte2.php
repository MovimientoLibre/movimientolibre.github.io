<?php
/**
 * Movimiento Libre - GentooLinuxMiInstalacionPersonal2010Parte2
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
 * Clase GentooLinuxMiInstalacionPersonal2010Parte2
 */
class GentooLinuxMiInstalacionPersonal2010Parte2 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Gentoo Linux en una netbook (2010, parte 2)';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2010-11-26T10:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'gentoo-linux-mi-instalacion-personal-2010-parte-2';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Le invito a continuar leyendo esta segunda parte de la Guía de Instalación de Gentoo Linux para una netbook.';
        $this->claves                     = 'Gentoo Linux, Instalacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/GentooLinuxMiInstalacionPersonal2010Parte2.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux');
    } // constructor

} // Clase GentooLinuxMiInstalacionPersonal2010Parte2

?>
