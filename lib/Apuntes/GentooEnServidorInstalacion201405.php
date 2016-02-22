<?php
/**
 * Movimiento Libre - Instalación de Gentoo Linux para un servidor
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
 * Clase GentooEnServidorInstalacion201405
 */
class GentooEnServidorInstalacion201405 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Instalación de Gentoo Linux para un servidor';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2014-06-15T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'gentoo-en-servidor-instalacion-2014-05';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En cantidad de programas y tiempo requerido, instalar un servidor requiere menos de los dos. Pero siempre, gracias a las ventajas de Gentoo Linux, cuidaremos que su desempeño y seguridad sean de lo mejor.';
        $this->claves                     = 'Gentoo Linux, Servidor, Instalacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/GentooEnServidorInstalacion201405.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux');
    } // constructor

} // Clase GentooEnServidorInstalacion201405

?>
