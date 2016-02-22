<?php
/**
 * Movimiento Libre - Intolerancia absoluta
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
 * Clase IntoleranciaAbsoluta
 */
class IntoleranciaAbsoluta extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Intolerancia absoluta';
     // $this->autor           = 'Autor';
        $this->fecha           = '2008-04-11T14:10';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'intolerancia-absoluta';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El vodka Absolut tiene una de las más ingeniosas campañas publicitarias, de hecho, se ha vuelto todo un icono del medio publicitario. Podríamos asegurar que no existe un consumidor que no haya visto algún anuncio de su conocida botella.';
        $this->claves          = 'Política';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/IntoleranciaAbsoluta.md';
        // Para el Organizador
        $this->categorias      = array('Política');
    } // constructor

} // Clase IntoleranciaAbsoluta

?>
