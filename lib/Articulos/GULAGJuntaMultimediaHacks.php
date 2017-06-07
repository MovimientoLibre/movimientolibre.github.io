<?php
/**
 * Movimiento Libre - GULAGJuntaMultimediaHacks
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

namespace Articulos;

/**
 * Clase GULAGJuntaMultimediaHacks
 */
class GULAGJuntaMultimediaHacks extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Junta de la Gulag "Multimedia Hacks"';
        $this->fecha                      = '2007-06-10T00:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'gulag-junta-multimedia-hacks';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El 9 de junio de 2007, Luis Páez (lobogris) nos dió una amena e interesante plática sobre hacks de multimedia para GNU/Linux. A groso modo, explicó los comandos para ripear un CD a mp3, para convertir a varios formatos de audio y cómo ripear videos desde un DVD.';
        $this->claves                     = 'GNU Linux, Multimedia, CD, MP3, DVD';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/GULAGJuntaMultimediaHacks.md';
        // Para el Organizador
        $this->categorias                 = array('GULAG');
    } // constructor

} // Clase GULAGJuntaMultimediaHacks

?>
