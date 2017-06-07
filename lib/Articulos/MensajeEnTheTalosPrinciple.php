<?php
/**
 * Movimiento Libre - Mensaje en The Talos Principle
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
 * Clase MensajeEnTheTalosPrinciple
 */
class MensajeEnTheTalosPrinciple extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Mensaje en The Talos Principle';
        $this->fecha                      = '2015-04-06T22:05';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'mensaje-en-the-talos-principle';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Esto aparece en una computadora dentro del video juego The Talos Principle.';
        $this->claves                     = 'Vida Cotidiana';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/MensajeEnTheTalosPrinciple.md';
        // Para el Organizador
        $this->categorias                 = array('Vida Cotidiana');
    } // constructor

} // Clase MensajeEnTheTalosPrinciple

?>
