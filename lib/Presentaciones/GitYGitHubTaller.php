<?php
/**
 * Movimiento Libre - Taller de Git y GitHub
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
 * Clase GitYGitHubTaller
 */
class GitYGitHubTaller extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Taller de Git y GitHub';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2015-09-27T23:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'git-y-github-taller';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Presentación para el Taller de Git y GitHub.';
        $this->claves                     = 'Presentacion, Taller, Desarrollo, Git, GitHub';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/GitYGitHubTaller.md';
        // Para el Organizador
        $this->categorias                 = array('Git', 'GitHub');
    } // constructor

} // Clase GitYGitHubTaller

?>