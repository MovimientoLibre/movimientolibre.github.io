<?php
/**
 * Movimiento Libre - InnovaTIC 1er Aniversario
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
 * Clase InnovaTIC1erAniversario
 */
class InnovaTIC1erAniversario extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'InnovaTIC 1er Aniversario';
        $this->fecha                      = '2009-03-03T13:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'innovatic-1er-aniversario';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Su servidor y un grupo de personas interesadas en la Innovación Colaborativa en el tema de TIC\'s estamos cumpliendo un año de habernos integrado como una RED de Trabajo, InnovaTIC.';
        $this->claves                     = 'InnovaTIC';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/InnovaTIC1erAniversario.md';
        // Para el Organizador
        $this->categorias                 = array('Política');
    } // constructor

} // Clase InnovaTIC1erAniversario

?>
