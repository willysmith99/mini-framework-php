<?php

    // define("BASE_URL", "http://localhost/tienda_virtual/");
    const BASE_URL = "http://localhost/tienda_virtual";

    // ZONA HORARIA
    date_default_timezone_set('America/Bogota');

    // DATOS CONEXION A BASE DE DATOS
    const DB_HOST = "localhost";
    const DB_NAME = "tienda";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_CHARSET = "charset=utf8";

    // DELIMINADORES DECIMAL Y MILLAR ej. 24,1989.00
    const SPD = ".";
    const SPM = ",";

    // SIMBOLO DE LA MONEDA
    const SMONEY = "$";

?>