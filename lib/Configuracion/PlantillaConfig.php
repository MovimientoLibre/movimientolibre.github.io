<?php
/**
 * Movimiento Libre - Plantilla Config
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
 * Clase PlantillaConfig
 */
class PlantillaConfig {

    public $sitio_titulo     = 'Movimiento Libre';
    public $sitio_url        = 'http://www.movimientolibre.com'; // Sin diagonal al final
    public $rss              = 'rss.xml';
    public $favicon          = 'favicon.ico';
    public $propio_css       = 'css/movimiento-libre.css';
    public $en_raiz          = false;       // Si es verdadero los vínculos serán para un archivo en la raíz del sitio
    public $para_compartir   = false;       // Si es verdadero pondrá los metas para tarjetas en Twitter/Facebook
    public $autor            = 'guivaloz';  // Autor por defecto
    public $mensaje_oculto   = <<<FINAL
<!-- ===========================================================================================

        Movimiento Libre

        Este sitio web es elaborado con la Plataforma de Conocimiento.
        El software que lo construye está bajo la licencia GPL versión 3. © 2014, 2015, 2016.
          Una copia está contenida en el archivo LICENCE al bajar desde GitHub.
        Agradecemos y compartimos las tecnologías abiertas y gratuitas sobre las que se basa:
          Twitter Bootstrap    http://getbootstrap.com
          StartBootStrap       http://startbootstrap.com
          Morris.js            https://morrisjs.github.io/morris.js/
          Evolvere iconos      http://github.com/franksouza183/EvolvereSuit
        Descargue, aprenda y colabore con este Software Libre:
          GitHub               https://github.com/guivaloz

     =========================================================================================== -->
FINAL;
    public $pie;
    protected $google_analytics = <<<FINAL
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-74263253-1', 'auto');
  ga('send', 'pageview');
</script>
FINAL;
    protected $google_site_verification;
    protected $cabecera_bootstrap_css;
    protected $cabecera_font_awesome_css;
    protected $cabecera_google_fonts_css;
    protected $scripts_jquery_css;
    protected $scripts_bootstrap_js;

    /**
     * Constructor
     *
     * Twitter Bootstrap desde http://www.bootstrapcdn.com/
     * Font Awsome desde http://www.bootstrapcdn.com/fontawesome/
     * JQuery desde Google apis segun https://developers.google.com/speed/libraries/
     */
    public function __construct() {
        // Si cambia a false entonces NO dependará de Internet
        if (true) {
            // jQuery según https://developers.google.com/speed/libraries/#jquery
            $this->scripts_jquery_css        = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>';
            // Twitter Bootstrap según https://www.bootstrapcdn.com/
            $this->cabecera_bootstrap_css    = '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">';
            $this->scripts_bootstrap_js      = '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>';
            // Font Awesome según https://www.bootstrapcdn.com/
            $this->cabecera_font_awesome_css = '<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">';
            // Google Fonts Droid Sans
            $this->cabecera_google_fonts_css = '<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">';
        }
    } // constructor

} // Clase PlantillaConfig

?>
