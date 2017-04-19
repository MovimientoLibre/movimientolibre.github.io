<?php
/**
 * Movimiento Libre - GULAGFLISOL2008
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
 * Clase GULAGFLISOL2008
 */
class GULAGFLISOL2008 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre          = 'FLISOL 2008';
        $this->fecha           = '2008-05-03T08:30';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'gulag-flisol-2008';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El 26 de abril de 2008, se llevó acabo el FLISOL (Festival Latinoamericano de Instalación de Software Libre), el cual fué organizado por segundo año consecutivo por el Grupo de Usuarios de GNU/Linux de La Laguna y con una asistencia de más de 50 personas.';
        $this->claves          = 'GULAG, FLISOL';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/GULAGFLISOL2008.md';
        // Para el Organizador
        $this->categorias      = array('GULAG');
    } // constructor

} // Clase GULAGFLISOL2008

?>
