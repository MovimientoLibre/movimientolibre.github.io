<?php
/**
 * Movimiento Libre - OfertaDeTrabajo
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
 * Clase OfertaDeTrabajo
 */
class OfertaDeTrabajo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Oferta de trabajo';
        $this->fecha                      = '2014-01-13T09:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'oferta-de-trabajo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Para hacer de su conocimiento una oferta de trabajo y para que me ayuden a propagar mi llamado.';
        $this->claves                     = 'Oferta, Trabajo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/OfertaDeTrabajo.md';
        // Para el Organizador
        $this->categorias                 = array('Vida Cotidiana');
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                     = 'ignorar';
    } // constructor

} // Clase OfertaDeTrabajo

?>
