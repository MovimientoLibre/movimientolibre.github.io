<?php
/**
 * Movimiento Libre - Revoluciónate a tí mismo, sé un programador
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
 * Clase RevolucionateATiMismoSeUnProgramador
 */
class RevolucionateATiMismoSeUnProgramador extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre          = 'Revoluciónate a tí mismo, sé un programador';
        $this->fecha           = '2014-05-11T21:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'revolucionate-a-ti-mismo-se-un-programador';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = '¿Qué sería de nuestra ciudad/estado/país/mundo si todo profesionista dedicara algo de su labor a la programación?';
        $this->claves          = 'Desarrollo, Programación';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/RevolucionateATiMismoSeUnProgramador.md';
        // Para el Organizador
        $this->categorias      = array('Educación');
    } // constructor

} // Clase RevolucionateATiMismoSeUnProgramador

?>
