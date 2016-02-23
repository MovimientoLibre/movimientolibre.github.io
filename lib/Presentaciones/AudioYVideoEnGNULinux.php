<?php
/**
 * Movimiento Libre - Audio y Video en GNU/Linux
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
 * Clase AudioYVideoEnGNULinux
 */
class AudioYVideoEnGNULinux extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Audio y Video en GNU/Linux';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2008-10-26T20:45';
        // El nombre del archivo a crear
        $this->archivo                    = 'audio-y-video-en-gnu-linux';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Presentación donde se muestran los programas multimedia de GNU/Linux como LAME, Audacity, FFMPEG, MPlayer, Xine y VLC.';
        $this->claves                     = 'Presentacion, Multimedia, GNU, Linux, LAME, Audacity, FFMPEG, MPlayer, VLC';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/AudioYVideoEnGNULinux.md';
        // Para el Organizador
        $this->categorias                 = array('GNU Linux');
    } // constructor

} // Clase AudioYVideoEnGNULinux

?>