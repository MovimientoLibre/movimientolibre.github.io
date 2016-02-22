<?php
/**
 * Movimiento Libre - BiosUpdateWithGrub
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
 * Clase BiosUpdateWithGrub
 */
class BiosUpdateWithGrub extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Actualización del BIOS con GRUB';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2010-12-28T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'bios-update-with-grub';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El BIOS es el software que se ejecuta al encender una computadora. Este apunte es para actualizar el BIOS por medio del gestor de arranque GRUB.';
        $this->claves                     = 'BIOS, GRUB, update, actualizar';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/BiosUpdateWithGrub.md';
        // Para el Organizador
        $this->categorias                 = array('Software Libre');
    } // constructor

} // Clase BiosUpdateWithGrub

?>
