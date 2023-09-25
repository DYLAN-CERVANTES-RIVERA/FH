<?php 
	function base_url(){
        $cadena_de_texto = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/FH/";
        return $cadena_de_texto;
    }


    function media(){
        $cadena_de_texto = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/FH/Public/";
            return $cadena_de_texto;
    }

    function header_f($data=""){
        $view_header = "Views/Plantilla/header.php";
        require_once ($view_header); 
    }

    function footer_f($data=""){
        $view_footer = "Views/Plantilla/footer.php";
        require_once ($view_footer); 
    }

    function scripts_f($data=""){
        $view_sc = "Views/Plantilla/scripts.php";
        require_once ($view_sc); 
    }

    function menu($data=""){
        $view_footer = "Views/Plantilla/menu.php";
        require_once ($view_footer); 
    }

    function dep($data){
        $format = print_r('<pre>');
        $format = print_r($data);
        $format = print_r('</pre>');
        return $format;
    }

    function strClean($strCadena){
        $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena);
        $string = trim($string); //Elimina espacios en blanco al inicio y al final
        $string = stripslashes($string); // Elimina las \ invertidas
        $string = str_ireplace("<script>","",$string);
        $string = str_ireplace("</script>","",$string);
        $string = str_ireplace("<script src>","",$string);
        $string = str_ireplace("<script type=>","",$string);
        $string = str_ireplace("SELECT * FROM","",$string);
        $string = str_ireplace("DELETE FROM","",$string);
        $string = str_ireplace("INSERT INTO","",$string);
        $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
        $string = str_ireplace("DROP TABLE","",$string);
        $string = str_ireplace("OR '1'='1","",$string);
        $string = str_ireplace('OR "1"="1"',"",$string);
        $string = str_ireplace('OR ´1´=´1´',"",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("in NULL; --","",$string);
        $string = str_ireplace("LIKE '","",$string);
        $string = str_ireplace('LIKE "',"",$string);
        $string = str_ireplace('LIKE ´',"",$string);
        $string = str_ireplace("OR 'a'='a","",$string);
        $string = str_ireplace('OR "a"="a',"",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("--","",$string);
        $string = str_ireplace("^","",$string);
        $string = str_ireplace("[","",$string);
        $string = str_ireplace("]","",$string);
        $string = str_ireplace("==","",$string);
        $string = str_ireplace("?","",$string);
        $string = str_ireplace("¿","",$string);
        $string = str_ireplace(".","",$string);
        $string = str_ireplace("¡","",$string);
        $string = str_ireplace("!","",$string);
        $string = str_ireplace("(","",$string);
        $string = str_ireplace(")","",$string);
        return $string;
    }
    
    function passGenerator($lenght = 10){
        $pass="";
        $longitud = $lenght;
        $cadena="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; 
        $longitudCadena=strlen($cadena);
        for($i=1;$i<=$longitud;$i++){
            $pos=rand(0,$longitudCadena-1);
            $pass.=substr($cadena,$pos,1);
        }
        return $pass;
    }

    function token(){
       $r1 = bin2hex(random_bytes(10));
       $r2 = bin2hex(random_bytes(10));
       $r3 = bin2hex(random_bytes(10));
       $r4 = bin2hex(random_bytes(10));
       $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
       return $token;
    }


    function encryption($string){
        $output=FALSE;
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output=base64_encode($output);
        return $output;
    }

    function decryption($string){
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }

    function formatMoney($cantidad){
        $cantidad = number_format($cantidad,2,SPD,SPM);
        return $cantidad;
     }

     function permisos_crud($id){
        require_once './Controllers/Usuarios.php';
        $crud= new Usuarios();
        $data=$crud->permisos_crudControlador($id);
        return $data;
     }

    function obtener_ip(){
        /// Recogemos la IP de la cabecera de la conexión
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        // Caso en que la IP llega a través de un Proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        // Caso en que la IP lleva a través de la cabecera de conexión remota
        else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    
    function transformar_mes($mes){
        if($mes == "01"){
            $mesN = "Enero";
        } elseif($mes == "02"){
            $mesN = "Febrero";
        } elseif($mes == "03"){
            $mesN = "mrzo";
        } elseif($mes == "04"){
            $mesN = "Abril";
        } elseif($mes == "05"){
            $mesN = "Mayo";
        } elseif($mes == "06"){
            $mesN = "Junio";
        } elseif($mes == "07"){
            $mesN = "Julio";
        } elseif($mes == "08"){
            $mesN = "Agosto";
        } elseif($mes == "09"){
            $mesN = "Septiembre";
        } elseif($mes == "10"){
            $mesN = "Octubre";
        } elseif($mes == "11"){
            $mesN = "Noviembre";
        } elseif($mes == "12"){
            $mesN = "Diciembre";
        }
        return $mesN;
    }

    function fechaEspanol($fecha) {
        $numeroDia = date('d', strtotime($fecha));
        $dia = date('l', strtotime($fecha));
        $mes = date('F', strtotime($fecha));
        $anio = date('Y', strtotime($fecha));
    
        $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
        $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
        $nombredia = str_replace($dias_EN, $dias_ES, $dia);
    
        $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
        return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
    }
    
    function random_version (){
        $hash =  base64_encode(openssl_random_pseudo_bytes(30));
        $v = $hash.'='.uniqid();
        return $v;
    }

 ?>