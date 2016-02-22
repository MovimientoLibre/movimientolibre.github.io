<?php
/**
 * Movimiento Libre - Revista del Consumidor - La descarga te hará libre
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
 * Clase RevistaDelConsumidorLaDescargaTeHaraLibre
 */
class RevistaDelConsumidorLaDescargaTeHaraLibre extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Revista del Consumidor - La descarga te hará libre';
     // $this->autor           = 'Autor';
        $this->fecha           = '2009-05-09T14:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo         = 'revista-del-consumidor-la-descarga-te-hara-libre';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Una muy grata sorpresa es encontrar un artículo dedicado al software gratuito en una revista de circulación nacional. Es en la Revista del Consumidor de Mayo de 2009.';
        $this->claves          = 'Software gratuito, Revista Consumidor, GNU Linux';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/RevistaDelConsumidorLaDescargaTeHaraLibre.md';
        // Para el Organizador
        $this->categorias      = array('Educación', 'GNU Linux');
    } // constructor

} // Clase RevistaDelConsumidorLaDescargaTeHaraLibre

?>
