<?php
/**
 * Movimiento Libre - GTUGCampout2010
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
 * Clase GTUGCampout2010
 */
class GTUGCampout2010 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'GTUG Campout Laguna 2010';
        $this->fecha                      = '2010-08-05T20:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'gtug-campout-2010';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'GTUG Campout es un evento de fin de semana largo en donde los participantes tienen la oportunidad de diseñar, desarrollar y demostrar una aplicación completa, elaborada durante los tres días.';
        $this->claves                     = 'GTUG, Google, Desarrollo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/GTUGCampout2010.md';
        // Para el Organizador
        $this->categorias                 = array('Desarrollo');
    } // constructor

} // Clase GTUGCampout2010

?>
