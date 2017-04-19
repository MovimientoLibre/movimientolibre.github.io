<?php
/**
 * Movimiento Libre - Cometa 17P Holmes
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
 * Clase Cometa17PHolmes
 */
class Cometa17PHolmes extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre          = 'Cometa 17P Holmes';
        $this->fecha           = '2007-10-31T10:20';
        // El nombre del archivo a crear
        $this->archivo         = 'cometa-17p-holmes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'A finales de octubre de 2007, el cometa 17P/Holmes aumentó su brillo de una manera significativa, en cerca de un millón de veces, desde una magnitud 17 hasta una magnitud 2,8 en unas pocas horas';
        $this->claves          = 'Astronomia, Cometa, 17P, Holmes';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/Cometa17PHolmes.md';
        // Para el Organizador
        $this->categorias      = array('Astronomía');
    } // constructor

} // Clase Cometa17PHolmes

?>
