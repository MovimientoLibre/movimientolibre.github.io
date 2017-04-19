<?php
/**
 * Movimiento Libre - GULAGPrimerAniversarioInstalacion
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
 * Clase GULAGPrimerAniversarioInstalacion
 */
class GULAGPrimerAniversarioInstalacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre          = 'Instalando los equipos para el Aniversario del GULAG';
        $this->fecha           = '2007-08-20T18:45';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'gulag-primer-aniversario-instalacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Un gran trabajo de equipo fue la instalación del GNU/Linux en las computadoras que se usaron en el taller que se impartió con motivo del primer aniversario del GULAG, tarea en la que nos enfrentamos a un gran número de retos.';
        $this->claves          = 'GULAG, Aniversario';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/GULAGPrimerAniversarioInstalacion.md';
        // Para el Organizador
        $this->categorias      = array('GULAG');
    } // constructor

} // Clase GULAGPrimerAniversarioInstalacion

?>
