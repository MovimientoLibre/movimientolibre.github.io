<?php
/**
 * Movimiento Libre - Calculadoras Científicas Chinas
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
 * Clase CalculadorasCientificasChinas
 */
class CalculadorasCientificasChinas extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Calculadoras Científicas Chinas';
     // $this->autor           = 'Autor';
        $this->fecha           = '2007-07-28T23:50';
        // El nombre del archivo a crear
        $this->archivo         = 'calculadoras-cientificas-chinas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Su servidor quedó sorprendido al encontrar en Waldos un producto de particular aprecio, a un costo y en tal cantidad que nunca me la hubiera imaginado: calculadoras científicas sin marca a $11.50 más I.V.A.';
        $this->claves          = 'Calculadoras, Cientificas, Chinas, Waldos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/CalculadorasCientificasChinas.md';
        // Para el Organizador
        $this->categorias      = array('Vida Cotidiana');
    } // constructor

} // Clase CalculadorasCientificasChinas

?>
