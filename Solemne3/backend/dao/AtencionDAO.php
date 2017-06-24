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
        $query = "INSERT INTO ATENCION (BENEFICIARIO_ID, FECHA_ATENCION, COMUNA_ID) values (:beneficiarioId, :fechaAtencion, :comunaId)";        
        $sentencia =  $this->conexion->prepare($query);        
        $beneficiario = $registro->getIdBeneficiario();
        $fecha = $registro->getFecAtencion();
        $comuna = $registro->getComunaID();        
        $sentencia->bindParam(':beneficiarioId', $beneficiario);
        $sentencia->bindParam(':fechaAtencion', $fecha);
        $sentencia->bindParam(':comunaId',$comuna);
        
        return $sentencia->execute();
    } 
}
