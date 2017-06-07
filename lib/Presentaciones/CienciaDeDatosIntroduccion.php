<?php
/**
 * Movimiento Libre - Introducción a la Ciencia de Datos
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
 * Clase CienciaDeDatosIntroduccion
 */
class CienciaDeDatosIntroduccion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Introducción a la Ciencia de Datos';
        $this->fecha                      = '2015-09-27T23:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'ciencia-de-datos-introduccion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Presentación para hacer una introducción a la Ciencia de Datos.';
        $this->claves                     = 'Presentacion, Informatica, Ciencia, Datos, Base de Datos, Datos Abiertos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/CienciaDeDatosIntroduccion.md';
        // Para el Organizador
        $this->categorias                 = array('Ciencia de Datos');
    } // constructor

} // Clase CienciaDeDatosIntroduccion

?>
