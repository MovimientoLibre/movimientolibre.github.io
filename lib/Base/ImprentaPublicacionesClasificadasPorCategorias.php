<?php
/**
 * Plataforma de Conocimiento - Imprenta Publicaciones Clasificadas por Categorías
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
 * Clase ImprentaPublicacionesClasificadasPorCategorias
 */
class ImprentaPublicacionesClasificadasPorCategorias extends ImprentaPublicaciones {

    // public $directorio;               // Texto, nombre del directorio en raíz donde se guardará el archivo HTML
    // public $publicaciones_directorio; // Texto, nombre del directorio dentro de lib que contiene los archivos con las publicaciones
    // public $encabezado;               // Código HTML para usarse como encabezado
    // public $encabezado_color;         // Texto, color de fondo del encabezado #nnnnnn
    // public $encabezado_icono;         // Texto, icono Font Awesome
    // public $claves;                   // Texto, palabras separadas por comas para meta tag
    // public $nombre_menu;              // Texto, opción del menú activa
    // public $titulo;                   // Texto, título de la página
    // public $descripcion;              // Texto, descripción para meta tag
    // protected $archivo_ruta;          // Texto opcional, ruta al archivo HTML del concentrador
    // protected $concentrador;          // Ruta a la clase. Puede ser \Base\PaginasDetallados, \Base\PaginasGalerias, \Base\PaginasListado o \Base\PaginasTarjetas
    // protected $recolector;            // Instancia de Recolector
    // protected $contador = 0;          // Entero, cantidad de publicaciones producidas

    /**
     * Constructor
     */
    public function __construct() {
        $this->recolector = new RecolectorCategorias();
    } // constructor

    /**
     * Encabezado HTML
     *
     * @param  string Título
     * @param  string Descripción
     * @return string Código HTML
     */
    protected function encabezado_html($titulo, $descripcion) {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        if ($this->encabezado_color != '') {
            $a[] = sprintf('      <div class="encabezado" style="background-color:%s;">', $this->encabezado_color);
        } else {
            $a[] = '      <div class="encabezado">';
        }
        if ($this->encabezado_icono != '') {
            $enca = sprintf('<i class="%s encabezado-icono"></i> %s', $this->encabezado_icono, $titulo);
        } else {
            $enca = $titulo;
        }
        $a[] = "        <span><h1>$enca</h1></span>";
        if ($descripcion != '') {
            $a[] = sprintf('        <div class="encabezado-descripcion">%s</div>', $descripcion);
        }
        $a[] = '      </div>';
        // Entregar
        return implode("\n", $a);
    } // encabezado_html

    /**
     * Imprimir categorias
     *
     * Crea archivos categoria-nombre.html
     */
    protected function imprimir_categorias() {
        // Iniciar la Plantilla
        $plantilla                = new Plantilla();
        $plantilla->navegacion    = new Navegacion();
        $plantilla->mapa_inferior = new MapaInferior();
        // Pasar a la plantilla estos valores
        $plantilla->claves                    = $this->claves;
        $plantilla->directorio                = $this->directorio;
        $plantilla->navegacion->opcion_activa = $this->nombre_menu;
        // Cargar configuración de las categorías
        $categorias_config = new \Configuracion\CategoriasConfig();
        // Bucle por todas las categorias
        foreach ($this->recolector->obtener_categorias() as $nombre) {
            // Obtener instancia de Categoria
            $categoria = $categorias_config->obtener($nombre);
            // Si está definido en \Configuracion\CategoriasConfig
            if ($categoria instanceof \Base\Categoria) {
                // Pasar a la plantilla estos valores
                $plantilla->titulo       = $categoria->nombre;
                $plantilla->descripcion  = $categoria->descripcion;
                $plantilla->archivo_ruta = sprintf('%s/categoria-%s.html', $this->directorio, \Base\Funciones::caracteres_para_web($categoria->nombre));
            } elseif ($categorias_config->mostrar_no_definidos) {
                // Pasar a la plantilla estos valores
                $plantilla->titulo       = $nombre;
                $plantilla->descripcion  = "Categoría $nombre";
                $plantilla->archivo_ruta = sprintf('%s/categoria-%s.html', $this->directorio, \Base\Funciones::caracteres_para_web($nombre));
            }
            // Filtrar
            $this->recolector->filtrar_publicaciones_de_categoria($nombre);
            // Iniciar concentrador
            $concentrador = new \Base\VinculosDetallados();
            // Bucle por las publicaciones con esa categoría
            foreach ($this->recolector->obtener_publicaciones() as $publicacion) {
                $vinculo = new Vinculo();
                $vinculo->definir_con_publicacion($publicacion);
                $concentrador->agregar($vinculo);
            }
            // Pasar el HTML y Javascript a la plantilla
            $plantilla->contenido  = array(
                $this->encabezado_html($plantilla->titulo, $plantilla->descripcion),
                $concentrador->html());
            $plantilla->javascript = $concentrador->javascript();
            // Imprimir
            $this->crear_directorio($plantilla->directorio);
            $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
        }
    } // imprimir_categorias

    /**
     * Imprimir índice
     *
     * Crea el archivo index.html
     */
    protected function imprimir_indice() {
        // Iniciar concentrador
        $concentrador = new \Base\VinculosCompactos();
        // Cargar configuración de las categorías
        $categorias_config = new \Configuracion\CategoriasConfig();
        // Bucle por todas las categorias
        foreach ($this->recolector->obtener_categorias() as $nombre) {
            // Obtener instancia de Categoria
            $categoria = $categorias_config->obtener($nombre);
            // Si está definido en \Configuracion\CategoriasConfig
            if ($categoria instanceof \Base\Categoria) {
                $url     = sprintf('categoria-%s.html', \Base\Funciones::caracteres_para_web($categoria->nombre));
                $vinculo = new \Base\Vinculo($categoria->nombre, $url, $categoria->icono, $this->directorio);
                $concentrador->agregar($vinculo);
            } elseif ($categorias_config->mostrar_no_definidos) {
                $url     = sprintf('categoria-%s.html', \Base\Funciones::caracteres_para_web($nombre));
                $vinculo = new \Base\Vinculo($nombre, $url, 'unknown', $this->directorio);
                $concentrador->agregar($vinculo);
            }
        }
        // Iniciar la Plantilla
        $plantilla                = new Plantilla();
        $plantilla->navegacion    = new Navegacion();
        $plantilla->mapa_inferior = new MapaInferior();
        // Pasar a la plantilla estos valores
        $plantilla->titulo                    = $this->titulo;
        $plantilla->descripcion               = $this->descripcion;
        $plantilla->claves                    = $this->claves;
        $plantilla->directorio                = $this->directorio;
        $plantilla->archivo_ruta              = $this->archivo_ruta;
        $plantilla->navegacion->opcion_activa = $this->nombre_menu;
        // Pasar el HTML y Javascript a la plantilla
        $plantilla->contenido  = array(
            $this->encabezado_html($this->titulo, $this->descripcion),
            $concentrador->html());
        $plantilla->javascript = $concentrador->javascript();
        // Imprimir index.html
        $this->crear_directorio($plantilla->directorio);
        $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
    } // imprimir_indice

    /**
     * Imprimir
     */
    public function imprimir() {
        echo "ImprentaPublicacionesClasificadosPorCategorias: ";
        $this->validar();
        $this->recolector->agregar_publicaciones_en($this->publicaciones_directorio, $this);
        $this->imprimir_publicaciones();
        $this->imprimir_indice();
        $this->imprimir_categorias();
        echo sprintf(" %d en %s\n", $this->contador, $this->publicaciones_directorio);
    } // imprimir

} // Clase ImprentaPublicacionesClasificadasPorCategorias

?>
