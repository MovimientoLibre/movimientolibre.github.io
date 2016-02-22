<?php
/**
 * Plataforma de Conocimiento - Creador
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
 * Clase Funciones
 */
class Funciones {

    /**
     * Caracteres para web
     *
     * Convierte el texto a minúsculas, quita acentos y cambia espacios por guiones
     *
     * @param  string Texto a convertir
     * @return string Convertido
     */
    public static function caracteres_para_web($in_texto) {
        $buscados            = array('ñ', 'Ñ', 'ü', 'Ü', 'á', 'Á', 'é', 'É', 'í', 'Í', 'ó', 'Ó', 'ú', 'Ú');
        $cambios             = array('n', 'n', 'u', 'u', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u');
        $sin_acentos         = str_replace($buscados, $cambios, $in_texto);
        $especiales          = array(' ', '#', '&', '%', '$', '@', '(', ')', '.', ',');
        $sin_especiales      = str_replace($especiales, '-', $sin_acentos);
        $sin_repetir_guiones = preg_replace('/\-+/', '-', $sin_especiales);
        return strtolower($sin_repetir_guiones);
    } // caracteres_para_web

    /**
     * Cargar archivo markdown
     *
     * @param  string Ruta al archivo markdown desde la raiz del sitio, ejemplo 'lib/Directorio/Archivo.md'
     * @return string Código HTML
     */
    public static function cargar_archivo_markdown($ruta) {
        $contenido = file_get_contents("$ruta");
        if ($contenido === false) {
            throw new \Exception("Error en Funciones::cargar_archivo_markdown: No se puede leer $ruta");
        }
        $html = \Michelf\Markdown::defaultTransform($contenido);
        return $html;
    } // cargar_archivo_markdown

    /**
     * Cargar archivo markdown extra
     *
     * Éste tiene la construcción de tablas.
     *
     * @param  string Ruta al archivo markdown desde la raiz del sitio, ejemplo 'lib/Directorio/Archivo.md'
     * @return string Código HTML
     */
    public static function cargar_archivo_markdown_extra($ruta) {
        $contenido = file_get_contents("$ruta");
        if ($contenido === false) {
            throw new \Exception("Error en Funciones::cargar_archivo_markdown_extra: No se puede leer $ruta");
        }
        $html    = \Michelf\MarkdownExtra::defaultTransform($contenido);
        $html_tb = str_replace('<table>', '<table class="table table-hover table-bordered">', $html); // Tablas de Twitter Bootstrap
        return $html_tb;
    } // cargar_archivo_markdown_extra

} // Clase Funciones

?>
