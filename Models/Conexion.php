<?php
class Conexion
{
    private static $conect;
    public static function conectar(): PDO
    {
        if (!isset(self::$conect)){
            try {
                include_once (CONFIG_PATH."configDb.php");
                $CONTROLADOR    =   DRIVER;
                $SERVIDOR       =   HOST_NAME;
                $BASE_DATOS     =   DATABASE_NAME;
                $PUERTO         =   PORT;
                $USUARIO        =   USER;
                $CLAVE          =   PASSWORD;
                $CODIFICACION   =   CHARSET;
                $url = "{$CONTROLADOR}:host={$SERVIDOR};port={$PUERTO};"
                    . "dbname={$BASE_DATOS};";
                self::$conect = new PDO($url,$USUARIO,$CLAVE);
                self::$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conect->exec("SET NAMES '$CODIFICACION'");
            }catch (PDOException $exception){
                throw new PDOException($exception->getMessage(),$exception->getCode());
            }
        }

        return self::$conect;
    }
    public static function desConectar(){
        return self::$conect = null;
    }
}
