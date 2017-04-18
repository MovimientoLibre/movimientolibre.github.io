<?php
/**
 * Movimiento Libre - FreemedInstalacion
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
 * Clase FreemedInstalacion
 */
class FreemedInstalacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre, porque en PublicacionConfig se define el publisher
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Instalación de FreeMED en Debian Etch';
        $this->fecha                      = '2008-01-16T19:10';
        // El nombre del archivo a crear
        $this->archivo                    = 'freemed-instalacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La instalación del FreeMED, una aplicación web basada en PHP, MySQL y Apache que sirve para administrar las citas de los pacientes con sus médicos.';
        $this->claves                     = 'Freemed, Php, Mysql, Apache, Instalación, Médicos, Citas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/FreemedInstalacion.md';
        // Para el Organizador
        $this->categorias                 = array('PHP');
    } // constructor

} // Clase FreemedInstalacion

?>
