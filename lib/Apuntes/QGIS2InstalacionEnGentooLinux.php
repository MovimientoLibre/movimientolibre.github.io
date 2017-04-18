<?php
/**
 * Movimiento Libre - Instalación de QGIS 2 en Gentoo Linux
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
 * Clase QGIS2InstalacionEnGentooLinux
 */
class QGIS2InstalacionEnGentooLinux extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre, porque en PublicacionConfig se define el publisher
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Instalación de QGIS 2 en Gentoo Linux';
        $this->fecha                      = '2014-02-28T11:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'qgis2-instalacion-en-gentoo-linux';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'QGIS es un programa para visulizar y manipular información georreferenciada.';
        $this->claves                     = 'Gentoo Linux, GIS, QGIS, Instalacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/QGIS2InstalacionEnGentooLinux.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux', 'Software Libre');
    } // constructor

} // Clase QGIS2InstalacionEnGentooLinux

?>
