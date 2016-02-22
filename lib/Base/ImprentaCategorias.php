<?php
/**
 * Plataforma de Conocimiento - Imprenta Categorías
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
 * Clase ImprentaCategorias
 */
class ImprentaCategorias extends Imprenta {

    const CATEGORIAS_DIR           = 'categorias'; // Nombre del directorio que se creará en la raiz para depositar los archivos HTML
    const NAVEGACION_OPCION_ACTIVA = 'Categorías'; // Opción del menú en /Configuracion/NavegacionConfig
    protected $imprentas;                          // Arreglo con rutas a las clases de ImprentaPublicaciones
    protected $recolector;                         // Instancia de RecolectorCategorias
    protected $contador            = 0;            // Entero, cantidad de archivos HTML de categorías creados

    /**
     * Constructor
     *
     * @param array Arreglo con rutas a las clases de ImprentaPublicaciones
     */
    public function __construct($imprentas) {
        $this->imprentas  = $imprentas;
        $this->recolector = new RecolectorCategorias();
    } // constructor

    /**
     * Imprimir categorías
     *
     * Crea los archivos para cada categoría usando la clase PaginasCategoriasIndividual
     */
    protected function imprimir_categorias() {
        // Iniciar la plantilla
        $plantilla                            = new Plantilla();
        $plantilla->navegacion                = new Navegacion();
        $plantilla->mapa_inferior             = new MapaInferior();
        $plantilla->directorio                = self::CATEGORIAS_DIR;
        $plantilla->navegacion->opcion_activa = self::NAVEGACION_OPCION_ACTIVA;
        // Crear directorio
        $this->crear_directorio($plantilla->directorio);
        // Bucle por todas las categorías
        foreach ($this->recolector->obtener_categorias() as $categoria_texto) {
            // Filtrar por esta categoría
            $this->recolector->filtrar_publicaciones_de_categoria($categoria_texto);
            // Definir la ruta del archivo HTML para esta categoría
            $categorias_config = new \Configuracion\CategoriasConfig();
            $categoria         = $categorias_config->obtener($categoria_texto);
            if ($categoria === false) {
                $categoria = new Categoria($categoria_texto);
            }
            $categoria->en_raiz = true;
            $categoria->en_otro = false;
            $ruta               = $categoria->url();
            // Iniciar PaginasCategoriasIndividual
            $pagina                  = new PaginasCategoriasIndividual($categoria, $this->recolector);
            // Pasar a la plantilla los valores que cambian en cada página
            $plantilla->titulo       = $pagina->titulo;
            $plantilla->descripcion  = $pagina->descripcion;
            $plantilla->claves       = "Categoria, $categoria_texto";
            $plantilla->archivo_ruta = $ruta;
            // Pasar a la plantilla el HTML y Javascript
            $plantilla->contenido    = $pagina->html();
            $plantilla->javascript   = $pagina->javascript();
            // Crear archivo
            $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
            $this->contador++;
        }
    } // imprimir_categorias

    /**
     * Imprimir index
     *
     * Crea el archivo /categorias/index.html usando PaginasCategoriasIndice
     */
    protected function imprimir_index() {
        // Iniciar la plantilla
        $plantilla                            = new Plantilla();
        $plantilla->navegacion                = new Navegacion();
        $plantilla->mapa_inferior             = new MapaInferior();
        $plantilla->directorio                = self::CATEGORIAS_DIR;
        $plantilla->navegacion->opcion_activa = self::NAVEGACION_OPCION_ACTIVA;
        $plantilla->titulo                    = "Categorías";
        $plantilla->descripcion               = "Todas las categorías";
        $plantilla->claves                    = "Categorias";
        $plantilla->archivo_ruta              = sprintf('%s/index.html', $plantilla->directorio);
        // Iniciar PaginasCategoriasIndice
        $pagina                = new PaginasCategoriasIndice($this->recolector);
        $pagina->titulo        = $plantilla->titulo;
        $pagina->descripcion   = $plantilla->descripcion;
        // Definir contenido
        $plantilla->contenido  = $pagina->html();
        $plantilla->javascript = $pagina->javascript();
        // Crear archivo
        $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
    } // imprimir_index

    /**
     * Imprimir
     */
    public function imprimir() {
        echo "ImprentaCategorias:    ";
        $this->recolector->agregar_publicaciones_de_imprentas($this->imprentas);
        $this->imprimir_categorias();
        $this->imprimir_index();
        // Mensaje
        echo sprintf("  %d en %s\n", $this->contador, self::CATEGORIAS_DIR);
    } // imprimir

} // Clase ImprentaCategorias

?>
