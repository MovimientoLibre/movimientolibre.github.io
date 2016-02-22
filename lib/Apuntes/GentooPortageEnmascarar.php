<?php
/**
 * MovimientoLibre - Enmascarar paquetes en Gentoo Linux
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
 * Clase GentooPortageEnmascarar
 */
class GentooPortageEnmascarar extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Enmascarar paquetes en Gentoo Linux';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2014-07-26T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'gentoo-portage-enmascarar';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Para evitar que una determinada versión de un paquete de software se instale en Gentoo Linux podemos enmascararlo.';
        $this->claves                     = 'Gentoo Linux, Portage';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/GentooPortageEnmascarar.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux');
    } // constructor

} // Clase GentooPortageEnmascarar

?>
