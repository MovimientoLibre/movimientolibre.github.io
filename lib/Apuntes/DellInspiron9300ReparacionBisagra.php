<?php
/**
 * Movimiento Libre - DellInspiron9300ReparacionBisagra
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

namespace Apuntes;

/**
 * Clase DellInspiron9300ReparacionBisagra
 */
class DellInspiron9300ReparacionBisagra extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre, porque en PublicacionConfig se define el publisher
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Dell Inspiron 9300 - Reparación de la bisagra';
        $this->fecha                      = '2009-07-26T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'dell-inspiron-9300-reparacion-bisagra';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Después de más de tres años de uso, mi portátil, una Dell Inspiron 9300, presentó una falla mecánica: la esquina inferior derecha de la pantalla se abultaba cada vez que trataba de cerrarla o abrirla.';
        $this->claves                     = 'Dell, Inspiron 9300, Reparacion, Bisagra';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/DellInspiron9300ReparacionBisagra.md';
        // Para el Organizador
        $this->categorias                 = array('Hardware');
    } // constructor

} // Clase DellInspiron9300ReparacionBisagra

?>
