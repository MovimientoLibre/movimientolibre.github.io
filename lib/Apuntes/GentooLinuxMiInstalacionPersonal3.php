<?php
/**
 * Movimiento Libre - GentooLinuxMiInstalacionPersonal3
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
 * Clase GentooLinuxMiInstalacionPersonal3
 */
class GentooLinuxMiInstalacionPersonal3 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Mi instalación personal de Gentoo Linux, tercera parte (actualizado 2008-nov)';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2008-11-15T21:10';
        // El nombre del archivo a crear
        $this->archivo                    = 'gentoo-linux-mi-instalacion-personal-3';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La continuación de la instalación de KDE 3.5.9 (versión estable cuando fue escrito esta publicación) y de los paquetes preferidos por su servidor.';
        $this->claves                     = 'Gentoo Linux, Instalacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/GentooLinuxMiInstalacionPersonal3.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux');
    } // constructor

} // Clase GentooLinuxMiInstalacionPersonal3

?>
