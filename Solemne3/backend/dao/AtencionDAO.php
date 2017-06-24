<?php
/**
 * Description of AtencionDAO
 *
 * @author F4YW3K
 */
include_once __DIR__ . "\..\domain\Atencion.php";

class AtencionDAO {
    
    /**
     *
     * @var PDO
     */
    private $conexion;
    
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    
     public function agregarAtencion($registro) {
        $query = "INSERT INTO atencion (BENEFICIARIO_ID, FECHA_ATENCION, COMUNA_ID) values (:beneficiario_id, :fecha_atencion, :comuna_id)";        
        $sentencia =  $this->conexion->prepare($query);        
        $beneficiario = $registro->getIdBeneficiario();
        $fecha = $registro->getFecAtencion();
        $comuna = $registro->getComunaID();        
        $sentencia->bindParam(':beneficiario_id', $beneficiario);
        $sentencia->bindParam(':fecha_atencion', $fecha);
        $sentencia->bindParam(':comuna_id',$comuna);
        
        return $sentencia->execute();
    } 
}
