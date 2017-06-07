<?php
/**
 * Movimiento Libre - GULAGCuartoCongreso
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
 * Clase GULAGCuartoCongreso
 */
class GULAGCuartoCongreso extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Cuarto Congreso Internacional de Software Libre';
        $this->fecha                      = '2010-09-11T23:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'gulag-cuarto-congreso';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El 10 y 11 de septiembre de 2010 el Grupo de Usuarios de GNU/Linux de la Laguna (GULAG) en conjunto con el Instituto Tecnológico y de Estudios Superiores de Monterrey, Campus Laguna (ITESM) organizaron el IV Congreso Internacional de Software Libre.';
        $this->claves                     = 'GULAG, Congreso, Software Libre, ITESM';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/GULAGCuartoCongreso.md';
        // Para el Organizador
        $this->categorias                 = array('GULAG');
    } // constructor

} // Clase GULAGCuartoCongreso

?>
