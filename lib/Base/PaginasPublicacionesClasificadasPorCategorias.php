<?php
/**
 * Plataforma de Conocimiento - Páginas Publicaciones Clasificadas por Categorías
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
 * Clase PaginasPublicacionesClasificadasPorCategorias
 */
class PaginasPublicacionesClasificadasPorCategorias extends Paginas {

    // public $titulo;
    // public $descripcion;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // public $en_raiz;
    // public $en_otro;
    // public $cantidad_maxima;
    // protected $recolector;
    // protected $concentrador;
    // protected $he_concentrado;

    /**
     * Constructor
     *
     * @param mixed Instancia de RecolectorCategorias
     */
    public function __construct(RecolectorCategorias $recolector) {
        $this->recolector = $recolector;
    } // constructor

    /**
     * Concentrar
     */
    protected function concentrar() {
        // Si ya se ha concentrado, no se hace nada
        if ($this->he_concentrado) {
            return;
        }
        // Cargar configuración de las categorías
        $categorias_config = new \Configuracion\CategoriasConfig();
        // Iniciar concentrador
        $this->concentrador = new \Base\VinculosCompactos();
        // Bucle por todas las categorias
        foreach ($this->recolector->obtener_categorias() as $nombre) {
            // Obtener instancia de Categoria
            $categoria = $categorias_config->obtener($nombre);
            // Si está definido en \Configuracion\CategoriasConfig
            if ($categoria instanceof \Base\Categoria) {
                $url              = sprintf('categoria-%s.html', \Base\Funciones::caracteres_para_web($categoria->nombre));
                $vinculo          = new \Base\Vinculo($categoria->nombre, $url, $categoria->icono, $this->directorio);
                $vinculo->en_raiz = false;
                $vinculo->en_otro = false;
                $this->concentrador->agregar($vinculo);
            } elseif ($categorias_config->mostrar_no_definidos) {
                $url              = sprintf('categoria-%s.html', \Base\Funciones::caracteres_para_web($nombre));
                $vinculo          = new \Base\Vinculo($nombre, $url, 'unknown', $this->directorio);
                $vinculo->en_raiz = false;
                $vinculo->en_otro = false;
                $this->concentrador->agregar($vinculo);
            }
        }
        // Levantar la bandera
        $this->he_concentrado = true;
    } // concentrar

} // Clase PaginasPublicacionesClasificadasPorCategorias

?>
