<?php
/**
 * Movimiento Libre - Taller de Inkscape
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
 * Clase InkscapeTaller
 */
class InkscapeTaller extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Taller de Inkscape';
        $this->fecha                      = '2007-08-16T22:45';
        // El nombre del archivo a crear
        $this->archivo                    = 'inkscape-taller';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Esta es una presentación breve que explica lo que es el dibujo vectorial, las ventajas del Inkscape y muestra los ejercicios hechos.';
        $this->claves                     = 'Presentacion, Taller, Inkscape';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/InkscapeTaller.md';
        // Para el Organizador
        $this->categorias                 = array('Software Libre');
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
    } // constructor

} // Clase InkscapeTaller

?>
