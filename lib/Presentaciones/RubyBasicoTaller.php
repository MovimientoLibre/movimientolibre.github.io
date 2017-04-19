<?php
/**
 * Movimiento Libre - Taller de Ruby Básico
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

namespace Presentaciones;

/**
 * Clase RubyBasicoTaller
 */
class RubyBasicoTaller extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Taller de Ruby Básico';
        $this->fecha                      = '2009-11-22T23:55';
        // El nombre del archivo a crear
        $this->archivo                    = 'ruby-basico-taller';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Taller Básico de Ruby para conocer y practicar las bases de este relativamente nuevo lenguaje de programación que promete un gran futuro.';
        $this->claves                     = 'Presentacion, Taller, Ruby, Basico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/RubyBasicoTaller.md';
        // Para el Organizador
        $this->categorias                 = array('Ruby');
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
    } // constructor

} // Clase RubyBasicoTaller

?>
