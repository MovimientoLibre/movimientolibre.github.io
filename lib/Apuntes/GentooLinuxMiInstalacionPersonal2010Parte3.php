<?php
/**
 * Movimiento Libre - GentooLinuxMiInstalacionPersonal2010Parte3
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
 * Clase GentooLinuxMiInstalacionPersonal2010Parte3
 */
class GentooLinuxMiInstalacionPersonal2010Parte3 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre, porque en PublicacionConfig se define el publisher
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Gentoo Linux en una netbook (2010, parte 3)';
        $this->fecha                      = '2010-12-02T22:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'gentoo-linux-mi-instalacion-personal-2010-parte-3';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'A continuación la última entrega de la Guía de instalación de Gentoo Linux para una notebook 2010.';
        $this->claves                     = 'Gentoo Linux, Instalacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/GentooLinuxMiInstalacionPersonal2010Parte3.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux');
    } // constructor

} // Clase GentooLinuxMiInstalacionPersonal2010Parte3

?>
