<?php
/**
 * Movimiento Libre - Cómo compilar el kernel Linux
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
 * Clase KernelLinuxComoCompilar
 */
class KernelLinuxComoCompilar extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Cómo compilar el kernel Linux';
        $this->fecha                      = '2007-07-14T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'kernel-linux-como-compilar';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Esta es una guía de la descarga, configuración e instalación del kernel Linux.';
        $this->claves                     = 'Presentacion, Kernel Linux';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/KernelLinuxComoCompilar.md';
        // Para el Organizador
        $this->categorias                 = array('Kernel Linux');
    } // constructor

} // Clase KernelLinuxComoCompilar

?>
