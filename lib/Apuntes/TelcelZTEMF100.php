<?php
/**
 * Movimiento Libre - TelcelZTEMF100
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
 * Clase TelcelZTEMF100
 */
class TelcelZTEMF100 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre, porque en PublicacionConfig se define el publisher
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Internet 3G con Telcel ZTE MF100';
        $this->fecha                      = '2011-01-20T12:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'telcel-zte-mf100';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Listo los programas a instalar y las configuraciones necesarias para que el ZTE MF100 de Telcel funcione en Gentoo Linux.';
        $this->claves                     = 'Gentoo Linux, Internet 3G, ZTE, Telcel';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/TelcelZTEMF100.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux');
    } // constructor

} // Clase TelcelZTEMF100

?>
