<?php
/**
 * Movimiento Libre - Equidad de Género en Informática
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
 * Clase EquidadDeGeneroEnInformatica
 */
class EquidadDeGeneroEnInformatica extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Equidad de Género en Informática';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2015-03-09T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'equidad-genero-informatica';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Aunque vivimos el mejor momento de las Ciencias Computacionales, el género femenino tiene muy poca participación en el sector.';
        $this->claves                     = 'Presentacion, Educacion, Equidad, Genero, Informatica, Trabajo, Mexico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/EquidadDeGeneroEnInformatica.md';
        // Para el Organizador
        $this->categorias                 = array('Educación');
    } // constructor

} // Clase EquidadDeGeneroEnInformatica

?>