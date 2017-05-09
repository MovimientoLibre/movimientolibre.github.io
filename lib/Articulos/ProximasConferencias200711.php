<?php
/**
 * Movimiento Libre - ProximasConferencias200711
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
 * Clase ProximasConferencias200711
 */
class ProximasConferencias200711 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Próximas conferencias';
        $this->fecha                      = '2007-11-24T14:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'proximas-conferencias-2007-11';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Les informo que participaré en el 1er Foro Regional de Ingenierías Electromecánica y Sistemas y en el Congreso UAL 2008.';
        $this->claves                     = 'Conferencias';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/ProximasConferencias200711.md';
        // Para el Organizador
        $this->categorias                 = array('Conferencias');
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                     = 'ignorar';
    } // constructor

} // Clase ProximasConferencias200711

?>
