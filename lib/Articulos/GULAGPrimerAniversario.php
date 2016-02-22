<?php
/**
 * Movimiento Libre - GULAGPrimerAniversario
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
 * Clase GULAGPrimerAniversario
 */
class GULAGPrimerAniversario extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Evento del Primer Aniversario del GULAG';
     // $this->autor           = 'Autor';
        $this->fecha           = '2007-08-20T20:30';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'gulag-primer-aniversario';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Ponencias muy interesantes, gran camaradería y una buenísima discada es parte de lo mucho que se vivió en el evento con motivo del primer aniversario del GULAG, realizado el sábado 18 de agosto en el Instituto Tecnológico de La Laguna.';
        $this->claves          = 'GULAG';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/GULAGPrimerAniversario.md';
        // Para el Organizador
        $this->categorias      = array('GULAG');
    } // constructor

} // Clase GULAGPrimerAniversario

?>
