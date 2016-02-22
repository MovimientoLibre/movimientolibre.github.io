<?php
/**
 * Movimiento Libre - Avistamiento de un bólido
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
 * Clase CaidaDeMeteorito20140114
 */
class CaidaDeMeteorito20140114 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Avistamiento de un bólido';
     // $this->autor           = 'Autor';
        $this->fecha           = '2014-01-14T15:55';
        // El nombre del archivo a crear
        $this->archivo         = 'caida-de-meteorito-2014-01-14';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Veníamos conduciendo por el Periférico (en Gómez Palacio, Durango, México) y antes de subir el paso a desnivel que está frente a Soriana Hamburgo vimos un bólido surcar el cielo.';
        $this->claves          = 'Astronomia, Bolido';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/CaidaDeMeteorito20140114.md';
        // Para el Organizador
        $this->categorias      = array('Astronomía');
    } // constructor

} // Clase CaidaDeMeteorito20140114

?>
