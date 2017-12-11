<?php
/**
 * Movimiento Libre - PlataformaDelConocimientoGuiaDescriptiva
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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

namespace Presentaciones;

/**
 * Clase PlataformaDelConocimientoGuiaDescriptiva
 */
class PlataformaDelConocimientoGuiaDescriptiva extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                 = 'Plataforma del Conocimiento - Guía Descriptiva';
    //~ $this->autor                  = 'guivaloz';
        $this->fecha                  = '2017-12-10T10:40';
        // El nombre del archivo a crear
        $this->archivo                = 'plataforma-del-conocimiento-guia-descriptiva';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion            = 'Con motivo de los informes de fin de año y términos de la administración, elaboré esta presentación como una guía descriptiva del proyecto público más importante en el que he colaborado a la fecha: La Plataforma del Conocimiento del IMPLAN Torreón.';
        $this->claves                 = 'Sitios Web, Desarrollo, Plataformas, Conocimiento, Gobierno, IMPLAN Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_html = 'lib/Presentaciones/PlataformaDelConocimientoGuiaDescriptiva.html';
        // Para el Organizador
        $this->categorias             = array('PHP', 'Markdown');
    } // constructor

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        // Cargar archivo externo
        $this->javascript = $this->cargar_archivo('lib/Presentaciones/PlataformaDelConocimientoGuiaDescriptiva.js');
        // Entregar resultado del padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Contenido especial para redifusión
        $this->redifusion = <<<FINAL
<!-- Mostrar la primer imagen de la presentación como vínculo a la página -->
<a href="{$this->archivo}.html"><img src="plataforma-del-conocimiento-guia-descriptiva/plataforma-del-conocimiento-guia-descriptiva-18.jpg"></a>
<p>{$this->descripcion}</p>

FINAL;
        // Entregar resultado del padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase PlataformaDelConocimientoGuiaDescriptiva

?>
