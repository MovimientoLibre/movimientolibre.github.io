<?php
/**
 * Movimiento Libre - Adiós Wordpress, 2014 será el año de los CMS de archivos planos
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
 * Clase AdiosWordpressBienvenidosLosCMSDeArchivosPlanos
 */
class AdiosWordpressBienvenidosLosCMSDeArchivosPlanos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Adiós Wordpress, 2014 será el año de los CMS de archivos planos';
     // $this->autor           = 'Autor';
        $this->fecha           = '2014-02-28T10:30';
        // El nombre del archivo a crear
        $this->archivo         = 'adios-wordpress-bienvenidos-los-cms-de-archivos-planos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Ha comenzado una nueva ola de sitios web que buscan la simplicidad y la rápida implementación abandonando el uso de Wordpress como software para implementar un CMS.';
        $this->claves          = 'CMS, Gestor, Contenidos, Sitio Web';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/AdiosWordpressBienvenidosLosCMSDeArchivosPlanos.md';
        // Para el Organizador
        $this->categorias      = array('Software Libre');
    } // constructor

} // Clase AdiosWordpressBienvenidosLosCMSDeArchivosPlanos

?>
