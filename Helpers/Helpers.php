<?php

    // RETORNARA LA URL DEL PROYECTO
    function base_url(){
        return BASE_URL;
    }

    function dep($data){
        $format = print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('</pre>');

        return $format;
    }

    // ELIMINA ESPACIOS ENTRE PALABRAS
    function clean($cadena){
        $string = preg_replace(['/\s+/','/*\s|\s$/'],[' ',''],$cadena);
        $string = trim($string); // ELIMINA ESPACIOS EN EL BLANCO AL INICIO Y AL FINAL
        $string = stripslashes($string); // ELIMINA LAS \ INVERTIDAS
        $string = str_ireplace("<script>","",$string);
        $string = str_ireplace("</script>","",$string);
        $string = str_ireplace("<script src>","",$string);
        $string = str_ireplace("script type=>","",$string);
        $string = str_ireplace("script type=>","",$string);
        $string = str_ireplace("SELECT * FROM","",$string);
        $string = str_ireplace("DELETE FROM","",$string);
        $string = str_ireplace("INSERT INTO","",$string);
        $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
        $string = str_ireplace("DROP TABLE","",$string);
        $string = str_ireplace("OR '1'='1","",$string);
        $string = str_ireplace('OR "1"="1"',"",$string);
        $string = str_ireplace('OR ´1´=´1´',"",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("LIKE '","",$string);
        $string = str_ireplace('LIKE "',"",$string);
        $string = str_ireplace("LIKE ´","",$string);
        $string = str_ireplace("OR 'a'='a","",$string);
        $string = str_ireplace('OR "a"="a',"",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("--","",$string);
        $string = str_ireplace("^","",$string);
        $string = str_ireplace("[","",$string);
        $string = str_ireplace("]","",$string);
        $string = str_ireplace("==","",$string);

        return $string;

    }

    // GENERA UNA CONTRASEÑA DE 10 CARACTERES
    function passGenerator($length = 10){
        $pass = "";
        $longitudPass = $length;
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $longitudCadrena = strlen($cadena);

        for ($i=1; $i <= $longitudPass; $i++) { 
            $pos = rand(0,$longitudCadrena-1);
            $pass .= substr($cadena,$pos,1);
        }

        return $pass;
    }

    // GENERA UN TOKEN
    function token(){
        $r1 = bin2hex(random_bytes(10));
        $r2 = bin2hex(random_bytes(10));
        $r3 = bin2hex(random_bytes(10));
        $r4 = bin2hex(random_bytes(10));
        $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;

        return $token;
    }

    // FORMATO PARA VALORES MONETARIOS
    function formatMoney($cantidad){
        $cantidad = number_format($cantidad,2,SPD,SPM);

        return $cantidad;
    }

    
?>