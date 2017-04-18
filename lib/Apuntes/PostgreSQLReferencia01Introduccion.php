<?php
/**
 * Movimiento Libre - PostgreSQLReferencia01Introduccion
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
 * Clase PostgreSQLReferencia01Introduccion
 */
class PostgreSQLReferencia01Introduccion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre, porque en PublicacionConfig se define el publisher
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'PostgreSQL referencia rápida - 1) Introducción';
        $this->fecha                      = '2007-06-10T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'psql-referencia-01-introduccion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Primera parte de la guía PostgreSQL. Desarrollada originalmente en el Departamento de Ciencias de la Computación de la Universidad de California en Berkeley, fue pionera en muchos de los conceptos de bases de datos relacionales orientadas a objetos.';
        $this->claves                     = 'PostgreSQL, Guia';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/PostgreSQLReferencia01Introduccion.md';
        // Para el Organizador
        $this->categorias                 = array('PostgreSQL');
    } // constructor

} // Clase PostgreSQLReferencia01Introduccion

?>
