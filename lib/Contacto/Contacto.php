<?php
/**
 * Movimiento Libre - Contacto
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

namespace Contacto;

/**
 * Clase Contacto
 */
class Contacto extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título
        $this->nombre                    = 'Contacto';
        // El nombre del archivo a crear
        $this->archivo                   = 'contacto';
        // Rutas relativas a archivos de imágenes y levantar la bandera para que se muestre
        $this->imagen                    = 'contacto/imagen.jpg';
        $this->imagen_previa             = 'contacto/imagen-previa.jpg';
        $this->poner_imagen_en_contenido = TRUE;
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Datos de contacto del responsable de este sitio web.';
        $this->claves                    = 'Contacto, Movimiento Libre';
        // Instancia para datos de contacto
        $contacto                        = new \Base\SchemaContactPoint();
        $contacto->name                  = 'Guillermo Valdés Lozano';
        $contacto->description           = 'Desarrollador de Software. Científico de Datos. Dominio de GNU/Linux y PHP. Estudia Java, Python y R. Capacitador de Software Libre. Trabaja en IMPLAN Torreón.';
        $contacto->image                 = $this->imagen;
        $contacto->image_show            = TRUE;
        $contacto->email                 = 'guivaloz@movimientolibre.com';
        $contacto->content               = \Base\Funciones::cargar_archivo_markdown('lib/Contacto/Contacto.md');
        $contacto->big_heading           = TRUE;
        // El contenido es un Schema
        $this->contenido                 = $contacto;
    } // constructor

} // Clase Contacto

?>
