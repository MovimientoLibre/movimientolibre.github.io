<?php
/**
 * Movimiento Libre - Via pc2500 primera impresión
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
 * Clase VIAPC2500GPrimeraImpresion
 */
class VIAPC2500GPrimeraImpresion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Via pc2500 primera impresión';
     // $this->autor           = 'Autor';
        $this->fecha           = '2007-09-24T13:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'via-pc2500-primera-impresion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Después de mucho tiempo de búsqueda, por fin tengo en mis manos un equipo Mini-ITX de Via Technologies.';
        $this->claves          = 'Hardware, Tarjeta Madre, VIA, Mini-ITX';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/VIAPC2500GPrimeraImpresion.md';
        // Para el Organizador
        $this->categorias      = array('Hardware');
    } // constructor

} // Clase VIAPC2500GPrimeraImpresion

?>
