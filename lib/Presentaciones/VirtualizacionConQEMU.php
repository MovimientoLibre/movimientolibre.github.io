<?php
/**
 * Movimiento Libre - Virtualización con QEmu
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
 * Clase VirtualizacionConQEMU
 */
class VirtualizacionConQEMU extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Virtualización con QEmu';
        $this->fecha                      = '2009-11-28T23:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'virtualizacion-con-qemu';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Ilustra de forma sencilla cómo se usa el virtualizador QEmu y cómo lo he usado en la impartición de clases de GNU/Linux';
        $this->claves                     = 'Presentacion, Virtualizador, QEMU, GNU Linux';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/VirtualizacionConQEMU.md';
        // Para el Organizador
        $this->categorias                 = array('GNU Linux');
    } // constructor

} // Clase VirtualizacionConQEMU

?>
