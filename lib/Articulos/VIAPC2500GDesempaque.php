<?php
/**
 * Movimiento Libre - Desempaque de la Via pc2500g
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
 * Clase VIAPC2500GDesempaque
 */
class VIAPC2500GDesempaque extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Desempaque de la Via pc2500g';
        $this->fecha                      = '2007-10-30T13:10';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'via-pc2500g-desempaque';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Para continuar estudiando los equipos Via pc-1 adquirmos una segunda computadora. Solicité la variante g, es decir, es la pc2500g. Les muestro la tradicional secuencia de imágenes del desempaque del nuevo hardware.';
        $this->claves                     = 'Hardware, Tarjeta Madre, VIA, Mini-ITX';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/VIAPC2500GDesempaque.md';
        // Para el Organizador
        $this->categorias                 = array('Hardware');
    } // constructor

} // Clase VIAPC2500GDesempaque

?>
