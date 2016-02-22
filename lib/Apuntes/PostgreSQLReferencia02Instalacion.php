<?php
/**
 * Movimiento Libre - PostgreSQLReferencia02Instalacion
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
 * Clase PostgreSQLReferencia02Instalacion
 */
class PostgreSQLReferencia02Instalacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'PostgreSQL referencia rápida - 2) Instalación';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2007-06-12T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'psql-referencia-02-instalacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los pasos descritos a contiuación son para instalar y configurar PostgreSQL en Gentoo Linux.';
        $this->claves                     = 'PostgreSQL, Guia';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/PostgreSQLReferencia02Instalacion.md';
        // Para el Organizador
        $this->categorias                 = array('PostgreSQL');
    } // constructor

} // Clase PostgreSQLReferencia02Instalacion

?>
