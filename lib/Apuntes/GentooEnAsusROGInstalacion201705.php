<?php
/**
 * Movimiento Libre - GentooEnAsusROGInstalacion201705
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * Clase GentooEnAsusROGInstalacion201705
 */
class GentooEnAsusROGInstalacion201705 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Apuntes para la Instalación de Gentoo Linux en una laptop ASUS';
    //~ $this->autor                      = '';
        $this->fecha                      = '2017-05-09T07:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'gentoo-en-asus-rog-instalacion-2017-05';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Pasos para la instalación de Gentoo Linux en la ASUS ROG a mayo de 2017.';
        $this->claves                     = 'Gentoo, Linux, Instalacion, ASUS';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/GentooEnAsusROGInstalacion201705.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux');
    } // constructor

} // Clase GentooEnAsusROGInstalacion201705

?>
