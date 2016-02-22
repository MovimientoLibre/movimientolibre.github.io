<?php
/**
 * Movimiento Libre - XFCE4 deshabilitar agente GPG y habilitar agente SSH
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
 * Clase XFCE4AgenteGPGAgenteSSH
 */
class XFCE4AgenteGPGAgenteSSH extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'XFCE4 deshabilitar agente GPG y habilitar agente SSH';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2014-08-07T09:15';
        // El nombre del archivo a crear
        $this->archivo                    = 'xfce4-deshabilitar-agente-gpg-habilitar-agente-ssh';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Cómo deshabilitar el agente GPG y en su lugar habilitar el agente SSH.';
        $this->claves                     = 'XFCE4, Desktop, Linux, OpenSSH, GNUPG';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/XFCE4AgenteGPGAgenteSSH.md';
        // Para el Organizador
        $this->categorias                 = array('XFCE4');
    } // constructor

} // Clase XFCE4AgenteGPGAgenteSSH

?>
