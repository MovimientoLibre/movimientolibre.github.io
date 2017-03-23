<?php
/**
 * Movimiento Libre - ElPoderDeLosDatosAbiertos
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
 * Clase ElPoderDeLosDatosAbiertos
 */
class ElPoderDeLosDatosAbiertos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'El Poder de los Datos Abiertos';
     // $this->autor                      = 'guivaloz';
        $this->fecha                      = '2016-02-24T13:08';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-poder-de-los-datos-abiertos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Encuentro de Ciudades Abiertas e Innovadoras de PIDES Innovación Social es un evento que forma parte del programa de Ciudades ASI el cuál se centra en promover mecanismos para el desarrollo y la sustentabilidad a través de políticas públicas y proyectos de gobierno abierto a nivel local.';
        $this->claves                     = 'Gobierno Abierto, Datos Abiertos, Seguridad Vial, Accidentes, Hackaton, Red Mexico Abierto';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/ElPoderDeLosDatosAbiertos.md';
        // Para el Organizador
        $this->categorias                 = array('Ciencia de Datos', 'Política');
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
    } // constructor

} // Clase ElPoderDeLosDatosAbiertos

?>
