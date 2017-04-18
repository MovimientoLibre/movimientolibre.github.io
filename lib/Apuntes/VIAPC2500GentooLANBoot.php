<?php
/**
 * Movimiento Libre - Instalación de Gentoo Linux para el Via pc2500 con carga por red (LAN boot)
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
 * Clase VIAPC2500GentooLANBoot
 */
class VIAPC2500GentooLANBoot extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre, porque en PublicacionConfig se define el publisher
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Instalación de Gentoo Linux para el Via pc2500 con carga por red (LAN boot)';
        $this->fecha                      = '2007-10-24T23:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'via-pc2500-gentoo-lan-boot';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Detallado manual sobre cómo instalar Gentoo Linux en la computadora VIA pc2500 con la modalidad de que tome el sistema operativo desde otro equipo.';
        $this->claves                     = 'Gentoo Linux, VIA, PC2500, MiniITX';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/VIAPC2500GentooLANBoot.md';
        // Para el Organizador
        $this->categorias                 = array('Hardware', 'Gentoo Linux');
    } // constructor

} // Clase VIAPC2500GentooLANBoot

?>
