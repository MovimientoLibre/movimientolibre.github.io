<?php
/**
 * Movimiento Libre - LatexCurriculumVitae
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
 * Clase LatexCurriculumVitae
 */
class LatexCurriculumVitae extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Curriculum Vitae hecho con LaTeX';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2007-12-15T22:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'latex-curriculum-vitae';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Una plantilla en LaTeX que podrá tomar para elaborar su propio Curriculum Vitae y la exportación a PDF de la misma.';
        $this->claves                     = 'LaTeX, Curriculum Vitae, Plantilla';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/LatexCurriculumVitae.md';
        // Para el Organizador
        $this->categorias                 = array('LaTeX');
    } // constructor

} // Clase LatexCurriculumVitae

?>
