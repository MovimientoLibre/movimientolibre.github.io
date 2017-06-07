<?php
/**
 * Movimiento Libre - FOSS 2.0 - Reseña
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
 * Clase CongresoIberoamericanoFOSS2011Resena
 */
class CongresoIberoamericanoFOSS2011Resena extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'FOSS 2.0 - Reseña';
        $this->fecha                      = '2011-06-14T10:17';
        // El nombre del archivo a crear
        $this->archivo                    = 'congreso-iberoamericano-foss-2011-resena';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los días 1 y 2 de junio de 2011 fue el Segundo Congreso Internacional de Software Libre organizado por la Universidad Autónoma de Zacatecas. A modo de reseña les muestro fotografías y fragmentos de las ponencias.';
        $this->claves                     = 'Congreso, Software Libre, Zacatecas, UAZ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/CongresoIberoamericanoFOSS2011Resena.md';
        // Para el Organizador
        $this->categorias                 = array('Conferencias');
    } // constructor

} // Clase CongresoIberoamericanoFOSS2011Resena

?>
