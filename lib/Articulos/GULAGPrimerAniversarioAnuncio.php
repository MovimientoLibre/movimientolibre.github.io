<?php
/**
 * Movimiento Libre - GULAGPrimerAniversarioAnuncio
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
 * Clase GULAGPrimerAniversarioAnuncio
 */
class GULAGPrimerAniversarioAnuncio extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Primer Aniversario del GULAG';
        $this->fecha                      = '2007-08-10T11:20';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'gulag-primer-aniversario-anuncio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Grupo de Usuarios de GNU/Linux de La Laguna, invita a las conferencias y taller que con motivo de la celebración del Primer Aniversario del Grupo se impartirán en el Instituto Tecnológico de La Laguna.';
        $this->claves                     = 'GULAG, Aniversario';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/GULAGPrimerAniversarioAnuncio.md';
        // Para el Organizador
        $this->categorias                 = array('GULAG');
    } // constructor

} // Clase GULAGPrimerAniversarioAnuncio

?>
