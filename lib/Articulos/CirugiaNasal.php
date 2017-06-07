<?php
/**
 * Movimiento Libre - Cirugía nasal
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
 * Clase CirugiaNasal
 */
class CirugiaNasal extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Cirugía nasal';
        $this->fecha                      = '2007-09-29T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'cirugia-nasal';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Es innumerable la cantidad de cosas que pasan por la mente en situaciones como éstas. Los miedos a las agujas, bisturí y hospitales se vuelven pesadillas que tratamos de minimizar rescatando la fe en el todo poderoso y con la confianza que tengamos en los médicos que nos hayan recomendado.';
        $this->claves                     = 'Cirugia, Nasal, Polipos, Sinusitis';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/CirugiaNasal.md';
        // Para el Organizador
        $this->categorias                 = array('Vida Cotidiana');
    } // constructor

} // Clase CirugiaNasal

?>
