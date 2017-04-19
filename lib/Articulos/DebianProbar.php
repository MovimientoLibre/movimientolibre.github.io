<?php
/**
 * Movimiento Libre - DebianProbar
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
 * Clase DebianProbar
 */
class DebianProbar extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre          = 'Razones para dejar Gentoo y probar Debian';
        $this->fecha           = '2007-06-01T00:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'debian-probar';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'He sido un devoto usuario de la distribución Gentoo Linux por aproximadamente 4 años, pero ayer reparticioné el disco duro de mi portátil para tener arranque dual con Gentoo y Debian.';
        $this->claves          = 'GNU Linux, Debian';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/DebianProbar.md';
        // Para el Organizador
        $this->categorias      = array('GNU Linux', 'Debian');
    } // constructor

} // Clase DebianProbar

?>
