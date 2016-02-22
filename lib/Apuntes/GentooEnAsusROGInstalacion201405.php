<?php
/**
 * Movimiento Libre - Apuntes de Instalación de Gentoo Linux en Laptop
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
 * Clase GentooEnAsusROGInstalacion201405
 */
class GentooEnAsusROGInstalacion201405 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Apuntes de Instalación de Gentoo Linux en Laptop';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2014-05-16T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'gentoo-en-asus-rog-instalacion-2014-05';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Durante mi última instalación no dejé de tomar notas de esta instalación de un sistema completo. Logro con ésto tener dos entornos gráficos: XFCE4 y KDE, servidor MySQL/PostgreSQL/Apache/PHP y mucho más.';
        $this->claves                     = 'Gentoo Linux, ASUS, ROG, Instalacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/GentooEnAsusROGInstalacion201405.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux');
    } // constructor

} // Clase GentooEnAsusROGInstalacion201405

?>
