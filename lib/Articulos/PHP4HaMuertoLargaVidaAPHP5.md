
[PHP](http://es.wikipedia.org/wiki/Php) es un lenguaje de programación interpretado que nació con la intención de elaborar páginas web dinámicas. Gracias a que es software libre y de que puede operar en la mayoría de los sistemas operativos (GNU/Linux, MacOS, Windows, sólo por mencionarlos) es hoy en día el lenguaje de programación _libre_ más usado en aplicaciones web.

PHP4 tiene siete años de haber sido liberado y PHP5 lleva tres. La principal diferencia entre ambas versiones está en la mejor implementación de la [programación orientada a objetos](http://es.wikipedia.org/wiki/OOP). Si estudiáramos dos sistemas que hicieran exactamente lo mismo, donde uno estuviese programado en PHP4 y el otro en PHP5, los códigos (o sea los programas) serían muy distintos uno del otro.

Lamentablemente es muy complicado y nada recomendable instalar en un mismo equipo al Apache, el PHP4 y PHP5. Por lo que, haciendo uso de las libertades del software libre, podemos elegir entre instalar PHP4 o PHP5. En el artículo [Instalación de FreeMED en Debian Etch](../apuntes/freemed-instalacion.html) les comenté a cerca de un muy buen sistema que está programado en PHP4, y que no funciona en PHP5.

La problemática actual es que muchos proveedores de _hosting_ no han cambiado al PHP5, por temor a que pierdan a sus usuarios que programan en PHP4. Y esto es un círculo vicioso: los usuarios no se animan a programar en PHP5 por que la mayoría de los proveedores de _hosting_ siguen usando PHP4. De acuerdo con [Nexen.net el 80% de los hostings aún continúan usando php4](http://www.nexen.net/chiffres_cles/phpversion/17283-php_statistics_for_june_2007.php#majeure) en sus servidores.

**Llegó el tiempo de tomar medidas más drásticas**. [GoPHP5.org](http://gophp5.org/) es una iniciativa de numerosos proyectos y organizaciones de la comunidad de desarrollo de PHP, como Drupal, Moodle, PEAR, phpMyAdmin, PHPUnit y más para detener conjuntamente, el próximo 5 de febrero, el [soporte al código de PHP4](http://javieraroche.com/2007/07/06/gophp5com-quitando-el-soporte-a-php4/) en sus proyectos en favor de PHP5, mucho más avanzado tecnológicamente.

Nadie afirmará que los cambios sean fáciles. Respetando la pluralidad de voces, hay quienes desean [mantener al PHP4](http://stopphp5.org/). Personalmente, yo sólo uso y recomiendo PHP5.
