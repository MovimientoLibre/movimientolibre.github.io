<?php
/**
 * Movimiento Libre - GULAGFLISOL2009
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
 * Clase GULAGFLISOL2009
 */
class GULAGFLISOL2009 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre          = 'FLISOL 2009';
        $this->fecha           = '2009-04-27T09:25';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'gulag-flisol-2009';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El 25 de abril de 2009 en la Universidad Autónoma de Coahuila (UAC) se llevó a cabo el Festival Latinoamericano de Instalación de Software Libre 2009 (FLISOL) organizado por tercer año consecutivo por el Grupo de Usuarios de GNU/Linux de La Laguna (GULAG).';
        $this->claves          = 'GULAG, FLISOL';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/GULAGFLISOL2009.md';
        // Para el Organizador
        $this->categorias      = array('GULAG');
    } // constructor

} // Clase GULAGFLISOL2009

?>
