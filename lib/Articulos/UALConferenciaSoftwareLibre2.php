<?php
/**
 * Movimiento Libre - UALConferenciaSoftwareLibre2
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

namespace Articulos;

/**
 * Clase UALConferenciaSoftwareLibre2
 */
class UALConferenciaSoftwareLibre2 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = '"Software Libre" en la Universidad Autónoma de La Laguna - Para alumnos de diversas licenciaturas';
        $this->fecha                      = '2008-05-03T08:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'ual-conferencia-software-libre-2';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El 25 de abril de 2008 fui amablemente invitado a dar la conferencia Software Libre al grupo de la Lic. Mayela Luna en la Universidad Autónoma de La Laguna.';
        $this->claves                     = 'Software Libre, UAL, Conferencia';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/UALConferenciaSoftwareLibre2.md';
        // Para el Organizador
        $this->categorias                 = array('Conferencias');
    } // constructor

} // Clase UALConferenciaSoftwareLibre2

?>
