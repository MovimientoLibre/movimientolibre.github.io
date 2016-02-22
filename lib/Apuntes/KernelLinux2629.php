<?php
/**
 * Movimiento Libre - KernelLinux2629
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
 * Clase KernelLinux2629
 */
class KernelLinux2629 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Kernel Linux 2.6.29 para Dell Inspiron 9300 con Gentoo Linux';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2009-06-17T21:45';
        // El nombre del archivo a crear
        $this->archivo                    = 'kernel-linux-2.6.29';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Kernel Linux versión 2.6.29 fue liberado por Linus Torvalds en marzo de 2009. Entre muchas novedades, otorga un soporte inicial del nuevo sistema de archivos Btrfs.';
        $this->claves                     = 'Gentoo Linux, Kernel, Btrfs';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/KernelLinux2629.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux', 'Kernel Linux');
    } // constructor

} // Clase KernelLinux2629

?>
