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


       public function getUsuarios() {
        $usuarios = 0;
        try {
            $strQuery = "SELECT count(*) FROM usuarios";
            if ($this->conBDPDO()) {
                $pQuery = $this->oConBD->prepare($strQuery);
                $pQuery->execute();
                $usuarios = $pQuery->fetchColumn();
            }
        } catch (PDOException $e) {
            echo "MySQL.getUsuarios: " . $e->getMessage() . "\n";
            return -1;
        }
        return $usuarios;

    }

    public function getPlatos() {
        $platos = 0;
        try {
            $strQuery = "SELECT count(*) FROM usuarios";
            if ($this->conBDPDO()) {
                $pQuery = $this->oConBD->prepare($strQuery);
                $pQuery->execute();
                $platos = $pQuery->fetchColumn();
            }
        } catch (PDOException $e) {
            echo "MySQL.getPlatos: " . $e->getMessage() . "\n";
            return -1;
        }
        return $platos;

    }

     public function getVendidos()
    {
        $vendidos = 0;
        try {
            $strQuery = "SELECT count(*) FROM usuarios";
            if ($this->conBDPDO()) {
                $pQuery = $this->oConBD->prepare($strQuery);
                $pQuery->execute();
                $vendidos = $pQuery->fetchColumn();
            }
        } catch (PDOException $e) {
            echo "MySQL.getVendidos: " . $e->getMessage() . "\n";
            return -1;
        }
        return $vendidos;

    }

    public function getDatosGrafica() 
    {
        $jDatos = '';
        $rawdata = array();
        $i = 0;
        try {
            $strQuery = "SELECT Fecha as tfecha, Precio as tprecio FROM pedido";

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
