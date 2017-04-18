<?php
/**
 * Movimiento Libre - RsyncRespaldos
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
 * Clase RsyncRespaldos
 */
class RsyncRespaldos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre, porque en PublicacionConfig se define el publisher
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Respaldos con rsync';
        $this->fecha                      = '2011-12-29T20:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'rsync-respaldos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Algo que todo usuario de la informática debe mantener como parte de su quehacer es la labor de hacer respaldos periódicos. Ya sea en un medio de almacenamiento grande (por ejemplo, un disco duro externo) o bien en otro equipo en la red local.';
        $this->claves                     = 'Gentoo Linux, Respaldos, Rsync';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/RsyncRespaldos.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux', 'Software Libre');
    } // constructor

} // Clase RsyncRespaldos

?>
