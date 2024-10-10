<?php     
    require 'config.php';
    require 'helpers/configuration.php';    

    $key = implode('-', str_split(substr(strtolower(md5(microtime().rand(1000, 9999))), 0, 30), 6));
    $mkey = md5($key);    
    setcookie("form-key", $key, time() + 3600);    
    
    $config = new Configuration($configData);
    $base_url = $config->getValue("BASE_URL");
    $recaptcha_html_key = $config->getValue('RECAPTCHA_HTML_KEY');
?>

<script type="text/javascript">
    var base_url = '<?php echo $base_url; ?>';
</script>    

