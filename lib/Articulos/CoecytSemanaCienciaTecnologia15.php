<?php
/**
 * Movimiento Libre - Software Libre en la XV Semana de Ciencia y Tecnología
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
 * Clase CoecytSemanaCienciaTecnologia15
 */
class CoecytSemanaCienciaTecnologia15 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Software Libre en la XV Semana de Ciencia y Tecnología';
        $this->fecha                      = '2008-10-26T08:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'coecyt-semana-ciencia-tecnologia-15';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El pasado 21 de octubre de 2008, impartí la plática Introducción al Software Libre ante alumnos de 5to. y 6to. de primaria. Los niños de esta generación muestran un mayor uso de las herramientas informáticas que las generaciones pasadas; sin embargo, para ellos fue la primera vez que escucharon hablar sobre Linux y Software Libre.';
        $this->claves                     = 'Presentacion, Software Libre, Educacion, Primaria';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/CoecytSemanaCienciaTecnologia15.md';
        // Para el Organizador
        $this->categorias                 = array('Conferencias');
    } // constructor

} // Clase CoecytSemanaCienciaTecnologia15

?>
