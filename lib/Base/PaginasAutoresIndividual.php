<?php
/**
 * Plataforma de Conocimiento - Páginas Autores Individual
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * @package PlataformaDeConocimiento
 */

namespace Base;

/**
 * Clase PaginasAutoresIndividual
 */
class PaginasAutoresIndividual extends Paginas {

    // public $titulo;
    // public $descripcion;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // public $en_raiz;
    // public $en_otro;
    protected $autor;      // Instancia de Autor
    protected $recolector; // Instancia de RecolectorAutores

    /**
     * Constructor
     *
     * @param mixed Instancia de Autor
     * @param mixed Instancia de RecolectorAutores
     */
    public function __construct(Autor $autor, RecolectorAutores $recolector) {
        // Parámetros
        $this->autor      = $autor;
        $this->recolector = $recolector;
        // Los vínculos apuntan a páginas en otros directorios
        $this->en_otro        = true;
        $this->autor->en_raiz = $this->en_raiz;
        $this->autor->en_otro = $this->en_otro;
    } // constructor

    /**
     * Autor Perfil HTML
     *
     * @return string Código HTML
     */
    public function autor_perfil_html() {
        // Si no tiene perfil no pone nada
        if ($this->autor->perfil_archivo == '') {
            return '      <!-- Autor Perfil: Se omite porque no está definido perfil_archivo -->';
        }
        // Cargar y convertir el archivo Markdown con el perfil
        $ruta = sprintf('%s/%s', Autor::PERFILES_DIR, $this->autor->perfil_archivo);
        try {
            $perfil_html = Funciones::cargar_archivo_markdown($ruta);
        } catch (\Exception $e) {
            return "      <!-- Autor Perfil: ERROR al tratar de cargar $ruta -->";
        }
        // Crear código HTML
        $a   = array();
        $a[] = '      <!-- Autor Perfil -->';
        $a[] = '      <div class="media autor">';
        $a[] = sprintf('        <span class="pull-left"><img class="media-object" src="%s"></span>', $this->autor->icono_url(256));
        $a[] = '        <div class="media-body">';
        $a[] = $perfil_html;
        if (($this->autor->email != '') && ($this->autor->twitter != '')) {
            $a[] = "              <p class=\"autor-email-twitter\">";
            $a[] = "                <i class=\"fa fa-envelope\"></i> <a href=\"mailto:{$this->autor->email}\" target=\"_blank\">{$this->autor->email}</a><br>";
            $a[] = "                <i class=\"fa fa-twitter\"></i> <a href=\"https://twitter.com/{$this->autor->twitter}\" target=\"_blank\">@{$this->autor->twitter}</a>";
            $a[] = "              </p>";
        } else {
            if ($this->autor->email != '') {
                $a[] = "              <p class=\"autor-email-twitter\"><i class=\"fa fa-envelope\"></i> <a href=\"mailto:{$this->autor->email}\" target=\"_blank\">{$this->autor->email}</a></p>";
            }
            if ($this->autor->twitter != '') {
                $a[] = "              <p class=\"autor-email-twitter\"><i class=\"fa fa-twitter\"></i> <a href=\"https://twitter.com/{$this->autor->twitter}\" target=\"_blank\">@{$this->autor->twitter}</a></p>";
            }
        }
        $a[] = '        </div>';
        $a[] = '      </div>';
        return implode("\n", $a);
    } // autor_perfil_html

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir el título y la descripción
        $this->titulo      = $this->autor->titulo_nombre_completo();
        $this->descripcion = $this->autor->semblanza;
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular encabezado
        $a[] = $this->encabezado_html();
        // Acumular el perfil del autor
        $a[] = $this->autor_perfil_html();
        // Definir concentrador
        $clase        = \Configuracion\AutoresConfig::VINCULOS_INDIVIDUAL;
        $concentrador = new $clase();
        // Bucle por todos los autores
        foreach ($this->recolector->obtener_publicaciones() as $publicacion) {
            // Definir vínculo
            $vinculo          = new \Base\Vinculo();
            $vinculo->en_raiz = $this->en_raiz;
            $vinculo->en_otro = $this->en_otro;
            $vinculo->definir_con_publicacion($publicacion);
             // Agregar vínculo
            $concentrador->agregar($vinculo);
        }
        // Acumular concentrador
        $a[] = $concentrador->html();
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase PaginasAutoresIndividual

?>
