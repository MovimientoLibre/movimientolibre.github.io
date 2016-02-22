
#### Problema

En una instalación nueva de [XFCE](http://www.xfce.org/) noté que por defecto ejecutaba el agente [GPG](https://gnupg.org/documentation/manuals/gnupg/Invoking-GPG_002dAGENT.html). Al tratar de eliminar llaves SSH hubo dificultades con el programa `ssh-add` ya que su agente no estaba en ejecución.

#### Solución

Para que XFCE4 lanze el agente SSH en lugar del de GPG ejecute:

    $ xfconf-query -c xfce4-session -p /startup/ssh-agent/type -n -t string -s ssh-agent

#### Verifique

![XFCE4 Deshabilitar agente GPG habilitar agente SSH](xfce4-deshabilitar-agente-gpg-habilitar-agente-ssh/xfce-editor-de-configuracion-ssh-agent.png)
