<?php
/**
 * Movimiento Libre - Radio UAL - Sinergia Empresarial
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
 * Clase UALSinergiaEmpresarial20110407
 */
class UALSinergiaEmpresarial20110407 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre          = 'Radio UAL - Sinergia Empresarial';
        $this->fecha           = '2011-04-26T16:10';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'ual-sinergia-empresarial-2011-04-07';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El 7 de abril del 2011 impartí el Taller Básico de Ruby ante un buen número de estudiantes, en el marco de la Semana Académica de la UAL.';
        $this->claves          = 'Ruby, Semana Academica, UAL';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/UALSinergiaEmpresarial20110407.md';
        // Para el Organizador
        $this->categorias      = array('Conferencias');
    } // constructor

} // Clase UALSinergiaEmpresarial20110407

?>
