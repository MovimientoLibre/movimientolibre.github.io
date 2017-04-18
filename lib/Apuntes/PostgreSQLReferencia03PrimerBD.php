<?php
/**
 * Movimiento Libre - PostgreSQLReferencia03PrimerBD
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
 * Clase PostgreSQLReferencia03PrimerBD
 */
class PostgreSQLReferencia03PrimerBD extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre, porque en PublicacionConfig se define el publisher
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'PostgreSQL referencia rápida - 3) Primer base de datos';
        $this->fecha                      = '2007-06-14T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'psql-referencia-03-primer-bd';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La lista de usuarios para las bases de datos PostgreSQL es independiente de la de los usuarios de su GNU/Linux, por lo que puede dar de alta libremente los usuarios que vayan a usar PostgreSQL.';
        $this->claves                     = 'PostgreSQL, Guia';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/PostgreSQLReferencia03PrimerBD.md';
        // Para el Organizador
        $this->categorias                 = array('PostgreSQL');
    } // constructor

} // Clase PostgreSQLReferencia03PrimerBD

?>
