<?php
/**
 * Movimiento Libre - Firefox3DownloadDay
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
 * Clase Firefox3DownloadDay
 */
class Firefox3DownloadDay extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre          = 'Firefox 3 Download Day: ¡Descarga hoy!';
        $this->fecha           = '2008-06-17T10:15';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'firefox-3-download-day';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Hoy es el día en que puedes ser parte de un récord mundial Guinnes, a la vez que descargas una de las aplicaciones libres más tracendentes de nuestro tiempo: Mozilla Firefox.';
        $this->claves          = 'Mozilla, Firefox';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/Firefox3DownloadDay.md';
        // Para el Organizador
        $this->categorias      = array('Firefox');
    } // constructor

} // Clase Firefox3DownloadDay

?>
