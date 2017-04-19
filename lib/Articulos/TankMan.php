<?php
/**
 * Movimiento Libre - Tank Man
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
 * Clase TankMan
 */
class TankMan extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre          = 'Tank Man';
        $this->fecha           = '2009-06-04T12:55';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'tank-man';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El 5 de junio de 1989, un hombre desconocido fue fotografiado y filmado cuando se paró frente a una fila de tanques de guerra que iban a la Plaza Tian\'anmen, impidiendo por poco tiempo su avance.';
        $this->claves          = 'Tank man, Plaza Tian\'anmen';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/TankMan.md';
        // Para el Organizador
        $this->categorias      = array('Política');
    } // constructor

} // Clase TankMan

?>
