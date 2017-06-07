<?php
/**
 * Movimiento Libre - NuevasTecnologiasEstandaresWeb
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
 * Clase NuevasTecnologiasEstandaresWeb
 */
class NuevasTecnologiasEstandaresWeb extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Nuevas Tecnologías y Estándares para la Web';
        $this->fecha                      = '2015-04-07T10:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'nuevas-tecnologias-estandares-web';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los sitios web ahora deben ser responsivos, semánticos y apegarse estrictamente a los estándares para garantizar su visualización en la mayoría de los dispositivos.';
        $this->claves                     = 'Estandares, Web, Tecnologias, Nuevas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/NuevasTecnologiasEstandaresWeb.md';
        // Para el Organizador
        $this->categorias                 = array('Desarrollo');
    } // constructor

} // Clase NuevasTecnologiasEstandaresWeb

?>
