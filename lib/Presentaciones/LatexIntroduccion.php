<?php
/**
 * Movimiento Libre - Introducción a LaTeX
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
 * Clase LatexIntroduccion
 */
class LatexIntroduccion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Introducción a LaTeX';
        $this->fecha                      = '2007-11-12T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'latex-introduccion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Introducción al LaTeX. LaTeX es un lenguaje de marcado para documentos y un sistema de preparación de documentos, el cual es ampliamente usado en el sector científico y académico.';
        $this->claves                     = 'Presentacion, Latex, Introduccion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/LatexIntroduccion.md';
        // Para el Organizador
        $this->categorias                 = array('LaTeX');
    } // constructor

} // Clase LatexIntroduccion

?>
