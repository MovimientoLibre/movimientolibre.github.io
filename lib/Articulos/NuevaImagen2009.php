<?php
/**
 * Movimiento Libre - NuevaImagen2009
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
 * Clase NuevaImagen2009
 */
class NuevaImagen2009 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Nueva imagen y logotipo para Movimiento Libre';
        $this->fecha                      = '2009-07-22T23:59';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'nueva-imagen-2009';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'He dedicado varios días para renovar al sitio de Movimiento Libre. La gran pregunta que tuve en mi cabeza fué... ¿qué logotipo se podría elaborar para Movimiento Libre?.';
        $this->claves                     = 'Imagen, Logotipo, Movimiento Libre';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/NuevaImagen2009.md';
        // Para el Organizador
        $this->categorias                 = array('Software Libre');
    } // constructor

} // Clase NuevaImagen2009

?>
