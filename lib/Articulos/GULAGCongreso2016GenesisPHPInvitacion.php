<?php
/**
 * Movimiento Libre - GULAGCongreso2016GenesisPHPInvitacion
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * Clase GULAGCongreso2016GenesisPHPInvitacion
 */
class GULAGCongreso2016GenesisPHPInvitacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'GULAG Congreso 2016 - Invitación al taller GenesisPHP';
     // $this->autor                      = '';
        $this->fecha                      = '2016-09-23T11:15';
        // El nombre del archivo a crear
        $this->archivo                    = 'gulag-congreso-2016-genesisphp-invitacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Invitación a la primera presentación en público del software libre GenesisPHP.';
        $this->claves                     = 'PHP';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/GULAGCongreso2016GenesisPHPInvitacion.md';
        // Para el Organizador
        $this->categorias                 = array('Desarrollo', 'Git', 'GitHub', 'PHP', 'PostgreSQL');
    } // constructor

} // Clase GULAGCongreso2016GenesisPHPInvitacion

?>
