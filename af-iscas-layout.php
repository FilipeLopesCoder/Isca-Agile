<?php
#Constroi um css puxando os valores selecionados no painel.
?>
<style type="text/css">
    p {
        /*color: blue;*/
    }

    .FormDesc {
        /*width: 200;
        float: left;*/
    }

    .FormOption {
        /*margin-left: 200;*/
    }

    textarea, select {
        /*width: 200px;*/
    }

/*
* Filipe
*/
#form-main{

}

.form-linha{
    
}
.form-linha input[text]{
    
}
.form-linha input[submit]{
    
}


/*-------*/
fieldset {
    display: block ;
    margin: 0 auto ;
    float: none ;
    max-width: 90%;
    background-image: url(<?php echo esc_attr( get_option('Background') ); ?>);
    background-size: contain;
}

.agile-group {
    display: block;
    float: left;
    width: 38%;
    margin-right: 4%;
}
.agile-field input[type="text"]{
    width: 100%;
    height: 42px !important;
    padding: 2% !important;
    border: 1px solid <?php echo esc_attr( get_option('Cor_padrao') ); ?> !important;
}
.agile-field input[type="email"]{
    width: 100%;
    height: 42px !important;
    padding: 2% !important;
    border: 1px solid <?php echo esc_attr( get_option('Cor_padrao') ); ?> !important;
}
.campo-texto{
    width: 100%;
    padding: 2%;
    border: 1px solid <?php echo esc_attr( get_option('Cor_padrao') ); ?>;
}
.agile-group-btn {
    display: block;
    float: left;
    width: 16%;
}
.agile-button {
    width: 100%;
    background-color: <?php echo esc_attr( get_option('Cor_padrao') ); ?>;
    border: none;
    padding: 0;
    color: #FFF;
    font-size: 18px;
    line-height: 42px;
}

</style>
<script type="text/javascript">
(function(a){var b=a.onload,p=false;if(p){a.onload="function"!=typeof b?function(){try{_agile_load_form_fields()}catch(a){}}:function(){b();try{_agile_load_form_fields()}catch(a){}}};a.document.forms["agile-form"].onsubmit=function(a){a.preventDefault();try{_agile_synch_form_v3()}catch(b){this.submit()}}})(window);
</script>