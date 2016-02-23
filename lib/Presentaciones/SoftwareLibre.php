<?php
/**
 * Movimiento Libre - Software Libre
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
 * Clase SoftwareLibre
 */
class SoftwareLibre extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Software Libre';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2007-11-28T11:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'software-libre';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Presentación que aborda los tipos de software, conceptos como GNU y GPL, distribuciones e imágenes de varios entornos gráficos y algunos ejemplos de software libre.';
        $this->claves                     = 'Presentacion, Software Libre, GNU, GPL, Distribuciones, Entornos graficos, GUI';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/SoftwareLibre.md';
        // Para el Organizador
        $this->categorias                 = array('GNU Linux');
    } // constructor

} // Clase SoftwareLibre

?>