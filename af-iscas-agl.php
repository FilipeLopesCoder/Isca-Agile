<?php
/**
 * Plugin Name: af-iscas-agile
 * Plugin URI:  http://afirmacomunicacao.com.br
 * Description: Insere as iscas do AgileCRM dentro de um layout pre programado que tambem gera um Shortcode para se inserido em qualquer lugar. [af_isca ]
 * Version: 1.3
 * Author: Filipe Lopes
 * Author URI: http://filipelopescoder.wordpress.com
 * License: GPL2
 * Text Domain: IscasAGL
 * Domain Path: languages/
 */

// Previne acesso direto
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Carrega arquivos de traduções
function af_i_agl_load_textdomain() {
	load_plugin_textdomain( 'IscasAGL', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

add_action( 'plugins_loaded', 'af_i_agl_load_textdomain' );

//----------------------------------------------------//
//Função que cria o shortcode a pagina de layout da isca
//[af_isca id="" name="" title="Cadastre-se para receber as melhores soluções para sua empresa e uso da Fibra Ótiptica."]
//Campo nome = classes: cont_txt_nome, txt_nome
//Campo email = classes: cont_txt_email, txt_email
//Isca menor = Fase 1

function inclui_layout_i_agl($attrs, $content){
	extract( shortcode_atts( array(
		//'id' => '',
		//'name' => '',
    'agile_form_name' => esc_attr( get_option('agile_form_name') ),
    'agile_domain' => esc_attr( get_option('agile_domain') ),
    'agile_api' => esc_attr( get_option('agile_api') ),
    'agile_redirect_url' => esc_attr( get_option('agile_redirect_url') ),
		'agile_form_id_tags' => esc_attr( get_option('agile_form_id_tags') ),
		'title' => esc_attr( get_option('title_isca') ),
		'text' => esc_attr( get_option('text_isca') ))
		,$attrs ) );



  $custom_content = '

<form class="form-view" id="agile-form" action="'.esc_attr( get_option('domain_action_form') ).'">
<fieldset>
<h2>'.$title.'</h2>
<h3>'.$text.'</h3>
<!-- Form Name
<legend>Isca geral</legend> -->
<div style="display: none; height: 0px; width: 0px;">
<input type="hidden" id="_agile_form_name" name="_agile_form_name" value="'.$agile_form_name.'">
<input type="hidden" id="_agile_domain" name="_agile_domain" value="'.$agile_domain.'">
<input type="hidden" id="_agile_api" name="_agile_api" value="'.$agile_api.'">
<input type="hidden" id="_agile_redirect_url" name="_agile_redirect_url" value="'.$agile_redirect_url.'">
<input type="hidden" id="_agile_form_id_tags" name="tags" value="'.$agile_form_id_tags.'">
</div>
<!-- Text input-->
<div class="agile-group required-control">
  <!-- <label class="agile-label" for="textinput"></label> -->
  <div class=" agile-field">
    <input id="textinput" name="first_name" type="text" placeholder="'. __('Name').'" class="agile-height-default campo-texto" required="">
  </div>
  <div class="agile-custom-clear"></div>
</div>
<!-- Text input-->
<div class="agile-group">
  <!-- <label class="agile-label" for="textinput"></label> -->
  <div class=" agile-field">
    <input id="textinput" name="email" type="email" placeholder="'. __('Email').'" class="agile-height-default campo-texto">
  </div>
  <div class="agile-custom-clear"></div>
</div>
<!-- Button -->
<div class="agile-group-btn">
  <!-- <label class="agile-label">&nbsp;</label> -->
  <div class="agile-field">
    <button type="submit" class="agile-button">'. __('Send').'</button><span id="agile-error-msg"></span>
  </div>
</div>

<span style="display: block; width: 100%; font-size: 14px;text-align: left;"><br /><br />*Os dados fornecidos não serão divulgados.</span>

</fieldset>
</form>
<!--
<script type="text/javascript">
document.forms["agile-form"].onsubmit=function(e){e.preventDefault();_agile_synch_form_v3()};
</script>
-->
';
  
    include('af-iscas-layout.php');

  if( $custom_content != '' ){
    $content .= $custom_content;
      return $content;
    }
  else
    return "Alguma coisa saiu errada :( chame o programador <_>";

}

add_shortcode( 'af_isca', 'inclui_layout_i_agl', 100 );



/**
 * Inclui a pagina de configuração do plugin
**/
if (!(include('af-iscas-options.php'))) {
    echo 'Warring, Fail on include options';
}
