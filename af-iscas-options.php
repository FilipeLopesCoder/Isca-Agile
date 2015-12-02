<?php
// create custom plugin settings menu
add_action('admin_menu', 'af_create_menu_agl');
function af_create_menu_agl() {

	//create new top-level menu
	add_menu_page('Af Custom Blog Plugin Settings', 'Af Plugin Settings', 'administrator', __FILE__, 'af_isc_agl_settings_page','dashicons-feedback');

	//call register settings function
	add_action( 'admin_init', 'register_af_i_mysettings' );
}


function register_af_i_mysettings() {
	//register our settings
	register_setting( 'afiscaagl-settings-group', 'domain_action_form' );
    register_setting( 'afiscaagl-settings-group', 'agile_form_name' );
    register_setting( 'afiscaagl-settings-group', 'agile_domain' );
    register_setting( 'afiscaagl-settings-group', 'agile_api' );
    register_setting( 'afiscaagl-settings-group', 'agile_redirect_url' );
    register_setting( 'afiscaagl-settings-group', 'agile_form_id_tags' );
	register_setting( 'afiscaagl-settings-group', 'Background' );
	register_setting( 'afiscaagl-settings-group', 'Cor_padrao' );
	register_setting( 'afiscaagl-settings-group', 'title_isca' );
    register_setting( 'afiscaagl-settings-group', 'text_isca' );
}

function af_isc_agl_settings_page() {
?>

<script type="text/javascript">
jQuery(document).ready(function($){
    $('.wp-color-picker-field').wpColorPicker();
});
</script>

<div class="wrap">
<h2>Af Custom Blog</h2>

<div>
    <h3><?php _e('Como funciona?'); ?></h3>
    <h4><?php _e('Basta adcionar o shortcode onde desejar que apareça a isca:'); ?></h4>
    <p><strong><?php _e('Configurações'); ?></strong> <?php _e('Para que a inscrição funcione primeiro é preciso inserir os dados do formulário criado no agile'); ?></p>
    <p><?php _e('Se preferir, pode inserir aqui um title para a isca ou inserir diretamente para o shortcode. Ex: [af_isca title="Isca do Agile"]'); ?></p>
</div>

<form method="post" action="options.php">
    <?php settings_fields( 'afiscaagl-settings-group' ); ?>
    <?php do_settings_sections( 'afiscaagl-settings-group' ); ?>
    <table class="form-table">
        <tr><th><h3><?php _e('Informações do cliente'); ?></h3></th></tr>
        <tr valign="top">
        <th scope="row">Domain Action Form: </th>
        <td><input type="text" name="domain_action_form" value="<?php echo esc_attr( get_option('domain_action_form') ); ?>" /></td>
        </tr>
        <tr valign="top">
            <td scope="row">agile_form_name</td>
            <td><input type="text" name="agile_form_name" value="<?php echo esc_attr( get_option('agile_form_name') ); ?>" /></td>
        </tr>
        <tr valign="top">
            <td scope="row">agile_domain</td>
            <td><input type="text" name="agile_domain" value="<?php echo esc_attr( get_option('agile_domain') ); ?>" /></td>
        </tr>
        <tr valign="top">
            <td scope="row">agile_api</td>
            <td><input type="text" name="agile_api" value="<?php echo esc_attr( get_option('agile_api') ); ?>" /></td>
        </tr>
        <tr valign="top">
            <td scope="row">agile_redirect_url</td>
            <td><input type="text" name="agile_redirect_url" value="<?php echo esc_attr( get_option('agile_redirect_url') ); ?>" /></td>
        </tr>
        <tr valign="top">
            <td scope="row">agile_form_id_tags</td>
            <td><input type="text" name="agile_form_id_tags" value="<?php echo esc_attr( get_option('agile_form_id_tags') ); ?>" /></td>
        </tr>
        <tr><th>&nbsp;</th></tr>

        <tr><th><h3><?php _e('Layout</h3></th>'); ?></tr>
        <tr valign="top">
        <th scope="row"><?php _e('Cor padrao dos componentes:'); ?></th>
        <td>
            <input type="text" name="Cor_padrao" value="<?php echo esc_attr( get_option('Cor_padrao') ); ?>" class="wp-color-picker-field" data-default-color="transparent" /></td>
        </tr>
        <th scope="row"><?php _e('Background:'); ?></th>
        <td>
            <input type="text" name="Background" value="<?php echo esc_attr( get_option('Background') ); ?>" class="wp-color-picker-field" data-default-color="transparent" /></td>
        </tr>

        <tr><th>&nbsp;</th></tr>

        <tr><th><h3><?php _e('Conteudo</h3></th>'); ?></tr>
        <tr valign="top">
        <th scope="row"><?php _e('title_isca:'); ?></th>
        <td>
            <input type="text" name="title_isca" value="<?php echo esc_attr( get_option('title_isca') ); ?>" /></td>
        </tr>
        <tr valign="top">
            <td scope="row"><?php _e('text_isca'); ?></td>
            <td><input type="text" name="text_isca" value="<?php echo esc_attr( get_option('text_isca') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>