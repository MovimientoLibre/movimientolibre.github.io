<?php
/**
 * Movimiento Libre - Webmin, administración y configuración desde web
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
 * Clase Webmin
 */
class Webmin extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Webmin, administración y configuración desde web';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2007-05-11T09:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'webmin';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Presentación del Webmin, que es un paquete que permite la administración remota de equipos desde una interfaz web.';
        $this->claves                     = 'Presentacion, Webmin';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/Webmin.md';
        // Para el Organizador
        $this->categorias                 = array('GNU Linux');
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
    } // constructor

} // Clase Webmin

?>
