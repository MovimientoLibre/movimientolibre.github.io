<?php
/**
 * Movimiento Libre - "PHP Básico" en el Tec de Lerdo
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
 * Clase TecLerdoPHPBasico
 */
class TecLerdoPHPBasico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = '"PHP Básico" en el Tec de Lerdo';
     // $this->autor           = 'Autor';
        $this->fecha           = '2008-04-17T22:55';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'tec-lerdo-php-basico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El 15 de abril de 2008, a nombre del GULAG, impartí la conferencia PHP Básico en el Instituto Tecnológico Superior de Lerdo.';
        $this->claves          = 'PHP, Basico, Tec de Lerdo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/TecLerdoPHPBasico.md';
        // Para el Organizador
        $this->categorias      = array('Conferencias');
    } // constructor

} // Clase TecLerdoPHPBasico

?>