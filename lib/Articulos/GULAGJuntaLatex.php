<?php
/**
 * Movimiento Libre - GULAGJuntaLatex
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
 * Clase GULAGJuntaLatex
 */
class GULAGJuntaLatex extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Junta de el Gulag, tema "LaTeX"';
        $this->fecha                      = '2007-11-09T08:50';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'gulag-junta-latex';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El próximo sábado 10 de Noviembre apartir de las 18:00 horas en el auditorio de la Universidad Autónoma de la Laguna, el Grupo de usuarios de GNU/Linux de La Laguna, estaremos celebrando nuestra catorceava reunión, con el tema LaTeX.';
        $this->claves                     = 'GULAG, Conferencias, LaTeX';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/GULAGJuntaLatex.md';
        // Para el Organizador
        $this->categorias                 = array('GULAG', 'Conferencias', 'LaTeX');
    } // constructor

} // Clase GULAGJuntaLatex

?>
