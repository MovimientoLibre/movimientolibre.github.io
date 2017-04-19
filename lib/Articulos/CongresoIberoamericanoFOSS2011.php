<?php
/**
 * Movimiento Libre - Segundo Congreso Internacional de Software Libre
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
 * Clase CongresoIberoamericanoFOSS2011
 */
class CongresoIberoamericanoFOSS2011 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre          = 'Segundo Congreso Internacional de Software Libre';
        $this->fecha           = '2011-05-27T11:20';
        // El nombre del archivo a crear
        $this->archivo         = 'congreso-iberoamericano-foss-2011';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El Segundo Congreso Internacional de Software Libre se llevó a cabo los días 1 y 2 de junio del 2011, en la ciudad de Zacatecas, México. El marco del evento fue el Auditorio de la Unidad Académica en Estudios del Desarrollo de la Universidad Autónoma de Zacatecas.';
        $this->claves          = 'Congreso, Software Libre, Zacatecas, UAZ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/CongresoIberoamericanoFOSS2011.md';
        // Para el Organizador
        $this->categorias      = array('Conferencias');
    } // constructor

} // Clase CongresoIberoamericanoFOSS2011

?>
