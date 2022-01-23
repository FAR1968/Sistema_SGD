<?php
/* 
************************************************************************************************** 
 Nombre archivo:......: menu_mod_usuario.php                         
 Version del Sistema..: 1.0.0        
 Autor:...............: FGMA          
 Fecha de Creacion....: 01/09/21
 Fecha de Modificacion: 00/00/21
 Objetivo.............: Menu de encabezado del modulo Empleado
 Modificacion.........: 
 Version del archivo..: 1.0.0 - version Local / Produccion 
 referencias..........:                 
 **************************************************************************************************
 */
?>
<!-- Menu Modulo Usuario -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand">Modulo Empleado</a>
            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i>Configurar<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:;">Preguntas de Seguridad</a></li>
                            <li><a href="javascript:;">Datos personales</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Usuario: <?php print_r($usuario); ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:;">Perfil</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div> <!-- /container -->
    </div> <!-- /navbar-inner -->
</div> <!-- /navbar -->