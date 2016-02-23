<?php
/**
 * Movimiento Libre - Pagina Inicial Config
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
 * @package MovimientoLibre
 */

namespace Configuracion;

/**
 * Clase PaginaInicialConfig
 */
class PaginaInicialConfig extends \Base\Plantilla {

    // public $sitio_titulo;
    // public $sitio_url;
    // public $rss;
    // public $favicon;
    // public $propio_css;
    // public $en_raiz;
    // public $para_compartir;
    // public $autor;
    // public $mensaje_oculto;
    // public $pie;
    // protected $google_analytics;
    // protected $google_site_verification;
    // protected $cabecera_bootstrap_css;
    // protected $cabecera_font_awesome_css;
    // protected $cabecera_google_fonts_css;
    // protected $scripts_jquery_css;
    // protected $scripts_bootstrap_js;
    // public $titulo;
    // public $descripcion;
    // public $claves;
    // public $directorio;
    // public $archivo_ruta;
    // public $imagen_previa_ruta;
    // public $icono;
    // public $navegacion;
    // public $contenido;
    // public $mapa_inferior;
    // public $javascript;
    // public $contenido_en_renglon;
    public $imprentas; // Arreglo con rutas a las clases de ImprentaPublicaciones, es usado en ultimas_publicaciones

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        // Propiedades para la página inicial
        $this->en_raiz                  = true;
        $this->directorio               = '.';
        $this->archivo_ruta             = "index.html";
        $this->titulo                   = 'Movimiento Libre';
        $this->autor                    = 'guivaloz';
        $this->descripcion              = 'Sitio web de Guillermo Valdés Lozano.';
        $this->claves                   = 'GNU, Linux, Software Libre, Desarrollo, Mexico';
        $this->imagen_previa_ruta       = 'imagenes/imagen-previa.jpg';
        $this->contenido_en_renglon     = false;
        $this->google_site_verification = '';
    } // constructor

    /**
     * Organizacion
     */
    protected function organizacion() {
        // Encabezado
        $organizacion                 = new \Base\SchemaOrganization();
        $organizacion->name           = 'Movimiento Libre';
        $organizacion->description    = 'Colección de ideas.';
        $organizacion->is_article     = false;
        $organizacion->big_heading    = true;
        $organizacion->headline_style = 'organizacion';
        // Acumular
        $this->contenido[] = '  <section id="organizacion">';
        $this->contenido[] = $organizacion->html();
        $this->contenido[] = '  </section>';
    } // organizacion

    /**
     * Destacado
     */
    protected function destacado() {
        // Apuntes
        $apuntes              = new \Base\SchemaProduct();
        $apuntes->name        = 'Apuntes';
        $apuntes->description = 'Para compartir y no perder diversos apuntes.';
        $apuntes->image       = 'imagenes/128/text-editor.png';
        $apuntes->url         = 'apuntes/index.html';
        // Artículos
        $articulos              = new \Base\SchemaProduct();
        $articulos->name        = 'Artículos';
        $articulos->description = 'Documentos un poco más elaborados.';
        $articulos->image       = 'imagenes/128/dictionary.png';
        $articulos->url         = 'articulos/index.html';
        // Presentaciones
        $presentaciones              = new \Base\SchemaProduct();
        $presentaciones->name        = 'Presentaciones';
        $presentaciones->description = 'Material visual así como sus archivos fuentes.';
        $presentaciones->image       = 'imagenes/128/calligrastage.png';
        $presentaciones->url         = 'presentaciones/index.html';
        // Acumular sección destacado
        $this->contenido[]  = '  <section id="destacado">';
        $this->contenido[]  = '    <div class="row">';
        $this->contenido[]  = '      <div class="col-sm-6 col-md-4">';
        $this->contenido[]  = $apuntes->html();
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '      <div class="col-sm-6 col-md-4">';
        $this->contenido[]  = $articulos->html();
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '      <div class="col-sm-6 col-md-4">';
        $this->contenido[]  = $presentaciones->html();
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '    </div>';
        $this->contenido[]  = '  </section>';
    } // destacado

    /**
     * Últimas publicaciones
     */
    protected function ultimas_publicaciones() {
        // Iniciar concentrador
        $concentrador          = new \Base\VinculosDetallados();
        $concentrador->en_raiz = true;
        // Iniciar Recolector
        $recolector = new \Base\Recolector();
        $recolector->agregar_publicaciones_de_imprentas($this->imprentas);
        // Bucle por las publicaciones, tiene la cantidad límite
        foreach ($recolector->obtener_publicaciones(5) as $publicacion) {
            // Iniciar vínculo
            $vinculo          = new \Base\Vinculo();
            $vinculo->en_raiz = true;
            $vinculo->en_otro = false;
            $vinculo->definir_con_publicacion($publicacion);
            // Agregar
            $concentrador->agregar($vinculo);
        }
        // Poner BrevesIndice
        $this->contenido[] = '  <section id="ultimas-publicaciones">';
        $this->contenido[] = '    <h2>Últimas publicaciones</h2>';
        $this->contenido[] = $concentrador->html();
        $this->contenido[] = '  </section>';
    } // ultimas_publicaciones

    /**
     * Redes
     */
    protected function redes() {
        $this->contenido[] = '  <section id="redes">';
        $this->contenido[] = '    <div class="row">';
        $this->contenido[] = '      <div class="col-md-8">';
        $this->contenido[] = '        <a href="index.html">Inicio</a> |';
        $this->contenido[] = '        <a href="apuntes/index.html">Apuntes</a> | ';
        $this->contenido[] = '        <a href="articulos/index.html">Artículos</a> | ';
        $this->contenido[] = '        <a href="licencias/index.html">Licencias</a> | ';
        $this->contenido[] = '        <a href="presentaciones/index.html">Presentaciones</a> |';
        $this->contenido[] = '        <a href="contacto/index.html">Contacto</a>';
        $this->contenido[] = '      </div>';
        $this->contenido[] = '      <div class="col-md-4">';
        $this->contenido[] = '        <div class="pull-right redes-sociales">';
        $this->contenido[] = '          <a class="fa fa-twitter-square" href="https://twitter.com/guivaloz" target="_blank"></a>';
        $this->contenido[] = '          <a class="fa fa-google-plus-square" href="https://plus.google.com/+GuillermoVald%C3%A9sLozano" target="_blank"></a>';
        $this->contenido[] = '          <a class="fa fa-github-square" href="https://github.com/guivaloz" target="_blank"></a>';
        $this->contenido[] = '          <a class="fa fa-rss-square" href="rss.xml"></a>';
        $this->contenido[] = '        </div>';
        $this->contenido[] = '      </div>';
        $this->contenido[] = '    </div>';
        $this->contenido[] = '  </section>';
    } // redes

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Elaborar secciones
        $this->organizacion();
        $this->destacado();
        $this->ultimas_publicaciones();
        $this->redes();
        // Entregar resultado del método en el padre
        return parent::html();
    } // html

} // Clase PaginaInicialConfig

?>