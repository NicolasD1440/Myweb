<?php
include 'conexion.php';
class MySql{
	private $oConBD = null;

	 public function __construct()
    {
        global $usuarioBD, $passBD, $ipBD, $nombreBD;
        $this->usuarioBD = $usuarioBD;
        $this->passBD = $passBD;
        $this->ipBD = $ipBD;
        $this->nombreBD = $nombreBD;
    }

      /**
     * Conexión BD por PDO
     */
    public function conBDPDO()
    {
        try {
            $this->oConBD = new PDO("mysql:host=" . $this->ipBD . ";dbname=" . $this->nombreBD, $this->usuarioBD, $this->passBD);
            return true;
        } catch (PDOException $e) {
            echo "Error al conectar a la base de datos: " . $e->getMessage() . "\n";
            return false;
        }
    }


      

    public function getDatosGrafica() 
    {
        $jDatos = '';
        $rawdata = array();
        $i = 0;
        try {
            $strQuery = "SELECT SUM(Precio) as tprecio, DATE_FORMAT(det_fecha, '%Y-%m-%d') as tfecha FROM pedido GROUP BY DATE_FORMAT(det_fecha, '%Y-%m-%d')";

              if ($this->conBDPDO()) {
                $pQuery = $this->oConBD->prepare($strQuery);
                $pQuery->execute();
                $pQuery->setFetchMode(PDO::FETCH_ASSOC);

                while($variable = $pQuery->fetch()) {
                    $oGrafica = new Grafica();
                    $oGrafica->totalFecha = $variable['tfecha'];
                    $oGrafica->totalVendidos = $variable['tprecio'];
                    
                    $rawdata[$i] = $oGrafica;
                    $i++;
                    }
                $jDatos = json_encode($rawdata);
            }
        } catch (PDOException $e) {
            echo "MySQL.getDatosGrafica: " . $e->getMessage() . "\n";
            return -1;
        }
        return $jDatos;
    }

    public function getDatosGrafica2() 
    {
        $jDatos = '';
        $rawdata = array();
        $i = 0;
        try {
            $strQuery = "SELECT SUM(Precio) as tprecio, Fecha as tfecha FROM pedido GROUP BY Fecha ORDER BY CASE 
            WHEN Fecha = 'lunes' THEN 1 
            WHEN Fecha = 'martes' THEN 2 
            WHEN Fecha = 'miercoles' THEN 3 
            WHEN Fecha = 'jueves' THEN 4 
            WHEN Fecha = 'viernes' THEN 5 
            WHEN Fecha = 'Sabado' THEN 6 
            WHEN Fecha = 'Domingo' THEN 7 END ASC";

              if ($this->conBDPDO()) {
                $pQuery = $this->oConBD->prepare($strQuery);
                $pQuery->execute();
                $pQuery->setFetchMode(PDO::FETCH_ASSOC);

                while($variable = $pQuery->fetch()) {
                    $oGrafica = new Grafica();
                    $oGrafica->totalFecha = $variable['tfecha'];
                    $oGrafica->totalVendidos = $variable['tprecio'];
                    
                    $rawdata[$i] = $oGrafica;
                    $i++;
                    }
                $jDatos = json_encode($rawdata);
            }
        } catch (PDOException $e) {
            echo "MySQL.getDatosGrafica: " . $e->getMessage() . "\n";
            return -1;
        }
        return $jDatos;
    }

    public function getDatosGrafica3() 
    {
        $jDatos = '';
        $rawdata = array();
        $i = 0;
        try {
            $strQuery = "SELECT Titulo as tnombre, Precio as tprecio FROM platos";

              if ($this->conBDPDO()) {
                $pQuery = $this->oConBD->prepare($strQuery);
                $pQuery->execute();
                $pQuery->setFetchMode(PDO::FETCH_ASSOC);

                while($variable = $pQuery->fetch()) {
                    $oGrafica = new Grafica();
                    $oGrafica->totalFecha = $variable['tnombre'];
                    $oGrafica->totalVendidos = $variable['tprecio'];
                    
                    $rawdata[$i] = $oGrafica;
                    $i++;
                    }
                $jDatos = json_encode($rawdata);
            }
        } catch (PDOException $e) {
            echo "MySQL.getDatosGrafica: " . $e->getMessage() . "\n";
            return -1;
        }
        return $jDatos;
    }

    public function getDatosGrafica4() 
    {
        $jDatos = '';
        $rawdata = array();
        $i = 0;
        try {
            $strQuery = "SELECT SUM(Precio) as tprecio, DATE_FORMAT(det_fecha, '%Y-%m-%d') as tfecha FROM pedido GROUP BY DATE_FORMAT(det_fecha, '%Y-%m-%d')";

              if ($this->conBDPDO()) {
                $pQuery = $this->oConBD->prepare($strQuery);
                $pQuery->execute();
                $pQuery->setFetchMode(PDO::FETCH_ASSOC);

                while($variable = $pQuery->fetch()) {
                    $oGrafica = new Grafica();
                    $oGrafica->totalFecha = $variable['tfecha'];
                    $oGrafica->totalVendidos = $variable['tprecio'];
                    
                    $rawdata[$i] = $oGrafica;
                    $i++;
                    }
                $jDatos = json_encode($rawdata);
            }
        } catch (PDOException $e) {
            echo "MySQL.getDatosGrafica: " . $e->getMessage() . "\n";
            return -1;
        }
        return $jDatos;
    }

}
    class Grafica{
    public $totalFecha = 0;
    public $totalVendidos = 0;
    }
    

?>
