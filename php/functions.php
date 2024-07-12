<?php
    function imprimirCabecera(){
        echo '
        <header>
            <nav class="w3-top">
                <div class="w3-bar w3-red">
                    <a class="w3-bar-item w3-orange" href="index.html">
                        <img src="../img/PinCellPartialLogo.svg" class="logo w3-left" alt="logo de la página">
                    </a>
                    <div class="w3-black w3-padding w3-card w3-right">
                        <a class="w3-bar-item w3-button w3-hover-orange" href="index.html">Inicio</a>
                        <a class="w3-bar-item w3-button w3-hover-green" href="modelosPopulares.html">Modelos populares</a>
                        <a class="w3-bar-item w3-button w3-hover-aqua" href="plataformasOnline.html">Plataformas online</a>
                        <a class="w3-bar-item w3-button w3-hover-indigo" href="plataformasLocales.html">Plataformas locales</a>
                        <a class="w3-bar-item w3-button w3-hover-blue" href="sobreNosotros.html">Contacto</a>
                    </div>
                </div>
            </nav>
        </header>
        ';
    }
?>