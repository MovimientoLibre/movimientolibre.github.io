<?php
/**
 * Movimiento Libre - Apuntes de Git
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
 * Clase GitApuntes
 */
class GitApuntes extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Apuntes de Git';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2014-01-21T19:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'git-apuntes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'GIT es un software de Control de Revisiones. Esto significa que es capaz de recordar los estados previos en que se hayan guardado los muchos archivos de un sistema.';
        $this->claves                     = 'GIT, Apuntes';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/GitApuntes.md';
        // Para el Organizador
        $this->categorias                 = array('Git');
    } // constructor

} // Clase GitApuntes

?>
