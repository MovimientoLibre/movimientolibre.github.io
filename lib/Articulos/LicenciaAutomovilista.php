<?php
/**
 * Movimiento Libre - Renovar la licencia de automovilista en Lerdo, Durango
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
 * Clase LicenciaAutomovilista
 */
class LicenciaAutomovilista extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Renovar la licencia de automovilista en Lerdo, Durango';
     // $this->autor           = 'Autor';
        $this->fecha           = '2008-02-18T10:20';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'licencia-automovilista';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Decidí documentar minuciosamente todo el proceso de renovación de la licencia de automovilista. Lo que a continuación expongo es un ejemplo de la desconsideración que tienen algunas autoridades con el tiempo y recursos de nosotros los ciudadanos.';
        $this->claves          = 'Licencia Automivislista, Lerdo, Durango, Tramite';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/LicenciaAutomovilista.md';
        // Para el Organizador
        $this->categorias      = array('Política');
    } // constructor

} // Clase LicenciaAutomovilista

?>
