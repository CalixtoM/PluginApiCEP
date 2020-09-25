<?php
/**
    * Plugin Name:  Busca pelo CEP
    * Description: Plugin que busca dados de endereço de alguém pelo CEP
    * Version: 1.0
    * Author: Matheus Calixto
    * Author URI: https://www.joguinhoseletronicos.com.br
 */

function busca_cep(){
    echo file_get_contents(plugins_url().'/buscacep/formBusca.php');
}

add_shortcode('buscaCep', 'busca_cep');

 ?>