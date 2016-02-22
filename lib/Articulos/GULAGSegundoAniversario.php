<?php
/**
 * Movimiento Libre - GULAGSegundoAniversario
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
 * Clase GULAGSegundoAniversario
 */
class GULAGSegundoAniversario extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Segundo Aniversario del Gulag / Software Freedom Day';
     // $this->autor           = 'Autor';
        $this->fecha           = '2008-09-18T13:30';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'gulag-segundo-aniversario';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Les invitamos cordialmente al Segundo Aniversario del Grupo de Usuarios de GNU/Linux de la Laguna que celebramos justo el Día del Software Libre "Software Freedom Day". Donde distinguidos protagonistas del Software Libre en México nos compartirán sus conocimientos y experiencias.';
        $this->claves          = 'GULAG, Aniversario, Software Freedom Day';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/GULAGSegundoAniversario.md';
        // Para el Organizador
        $this->categorias      = array('GULAG');
    } // constructor

} // Clase GULAGSegundoAniversario

?>
