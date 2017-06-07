<?php
/**
 * Movimiento Libre - Distribuciones GNU/Linux, entornos y programas libres
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
 * Clase DistribucionesGNULinux
 */
class DistribucionesGNULinux extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Distribuciones GNU/Linux, entornos y programas libres';
        $this->fecha                      = '2010-10-19T23:55';
        // El nombre del archivo a crear
        $this->archivo                    = 'distribuciones-gnulinux';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Amena y visual presentación sobre las distribuciones GNU/Linux y los entornos de escritorio más populares.';
        $this->claves                     = 'Presentacion, GNU Linux, Distribuciones';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/DistribucionesGNULinux.md';
        // Para el Organizador
        $this->categorias                 = array('GNU Linux');
    } // constructor

} // Clase DistribucionesGNULinux

?>
