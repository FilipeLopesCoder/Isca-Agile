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

</style>
<style type="text/css">
/*
.form-view{font-family:Tahoma,Geneva,sans-serif;margin:0 auto;width:450px}.agile-group{margin-bottom:15px}.agile-label{float:left;overflow:hidden;padding:7px 25px 0 0;text-align:right;word-wrap:break-word;width:109px;font-size:15px}.agile-group label{font-weight:400}.agile-label::first-letter{text-transform:capitalize}.agile-field{display:inline-block}.agile-field-small{width:100px}.agile-field-medium{width:150px}.agile-field-large{width:200px}.agile-field-xlarge{width:250px}.agile-height-small{padding:5px 10px!important}.agile-height-default{padding:6px 12px!important}.agile-height-large{padding:10px 16px!important}.agile-field input[type=email],.agile-field input[type=text]{padding:6px 12px}.agile-field select{border-radius:4px;border:1px solid #ccc;width:100%;box-shadow:0 1px 1px rgba(0,0,0,.075) inset}.agile-input-group{border-collapse:separate;display:table;position:relative}.agile-input-group input[type=email],.agile-input-group input[type=text]{display:table-cell}.agile-input-group .agile-group-addon:first-child,.agile-input-group input[type=email]:first-child,.agile-input-group input[type=text]:first-child{border-bottom-right-radius:0;border-top-right-radius:0}.agile-input-group .agile-group-addon:last-child,.agile-input-group input[type=email]:last-child,.agile-input-group input[type=text]:last-child{border-bottom-left-radius:0;border-top-left-radius:0}.agile-group-addon:first-child,.agile-input-group input[type=email]:first-child,.agile-input-group input[type=text]:first-child{border-right:0 none}.agile-group-addon{background:#eee;border:1px solid #ccc;display:table-cell;font-size:14px;padding:3px 12px;text-align:center}.agile-group-addon-append{border-bottom-right-radius:4px;border-top-right-radius:4px}.agile-group-addon-prepend{border-top-left-radius:4px;border-bottom-left-radius:4px}input[type=email],input[type=password],input[type=text],textarea{border:1px solid #ccc;border-radius:4px;box-shadow:0 1px 1px rgba(0,0,0,.075) inset;color:#555;font-size:14px;line-height:1.42857;transition:border-color .15s ease-in-out 0s,box-shadow .15s ease-in-out 0s;width:100%;margin:0}input[type=email]:focus,input[type=password]:focus,input[type=text]:focus,textarea:focus{border:1px solid #66afe9}.agile-btn-red{background:#ff604f!important;margin-left:10px}.help-block{color:#999;margin:0;font-size:14px;text-transform:capitalize}legend{border-bottom:1px solid #eee;margin-bottom:18px;padding-bottom:6px;width:100%;font-weight:700;font-size:20px}fieldset{border:none}.agile-custom-clear{clear:both}#agile-error-msg{position:relative;top:2px;left:8px;color:red;font-size:12px}
*/
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