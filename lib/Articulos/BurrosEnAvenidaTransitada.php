<?php
/**
 * Movimiento Libre - Burros en avenida transitada
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
 * Clase BurrosEnAvenidaTransitada
 */
class BurrosEnAvenidaTransitada extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre          = 'Burros en avenida transitada';
        $this->fecha           = '2007-10-05T16:00';
        // El nombre del archivo a crear
        $this->archivo         = 'burros-en-avenida-transitada';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Cuando nos trasladábamos por el boulevard Miguel Alemán nos encontramos varios burros pastando en el camellón central frente al auditorio Francisco Zarco.';
        $this->claves          = 'Transito, Animales, Burros, Carga';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/BurrosEnAvenidaTransitada.md';
        // Para el Organizador
        $this->categorias      = array('Vida Cotidiana');
    } // constructor

} // Clase BurrosEnAvenidaTransitada

?>
