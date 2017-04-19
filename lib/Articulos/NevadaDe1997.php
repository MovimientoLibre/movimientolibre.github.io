<?php
/**
 * Movimiento Libre - NevadaDe1997
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
 * Clase NevadaDe1997
 */
class NevadaDe1997 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre          = 'Nevada de 1997';
        $this->autor           = 'rosy';
        $this->fecha           = '2007-12-12T18:30';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'nevada-de-1997';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = '“¡Está nevando!”, dijo mi papá. Ese día la ciudad se paralizó, no hubo clases, muchos negocios no abrieron, había pocos camiones y muchos carros no arrancaron. ¡Oh, que emoción! ¡Es la segunda vez en mi vida que veo nevar! Inmediatamente corrí por mi cámara y todo el día la pasé en la calle tomando fotos a diestra y siniestra.';
        $this->claves          = 'Nevada, 1997';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/NevadaDe1997.md';
        // Para el Organizador
        $this->categorias      = array('Vida Cotidiana');
    } // constructor

} // Clase NevadaDe1997

?>
