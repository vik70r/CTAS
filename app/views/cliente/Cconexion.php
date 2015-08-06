<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php  
class Cconexion{
	 //metodos
	
    public function mostrarTabla($tabla){
		 $consulta="select * from ".$tabla."";
         $resultado=mysql_query($consulta);
		 
		 return $resultado;
		}
		
	public function ConsultaHotel($id){
		 $consulta="select * from THOTEL WHERE idhotel=".$id;
         $resultado=mysql_query($consulta);
		 
		 return $resultado;
		}
	public function ConsultaTour($id){
		 $consulta="select * from TTOUR WHERE idtour=".$id;
         $resultado=mysql_query($consulta);		 
		 return $resultado;
		}
	public function MantenimientoCobro($idcobro,$idreserva,$idempleado,$acuenta,$saldo,$consulta){
	//`tcobro` (`idcobro` ,`idreserva` ,`idempleado` ,`acuenta` ,`saldo` ,`cfecha`)
	if($consulta=="I"){
		 $sql=" INSERT INTO TCOBRO VALUES ( NULL, '".$idreserva."','".$idempleado."','".$acuenta."','".$saldo."','".date("d/m/Y")."')";
		   echo " <script language='JavaScript'> 
                alert('Sus Datos Fueron Almacenador Correctamente'); 
                </script>";
	}else
	if($consulta=="R"){
		$sql="SELECT  acuenta, saldo, cfecha  FROM  treserva,  tcobro
				WHERE treserva.idreserva = tcobro.idreserva
				  AND  treserva.idreserva = ".$idreserva;
				  
	  }
         $resultado=mysql_query($sql);
		 
		 return $resultado;
		}

	
	 public function MantenimientoTCliente($idcliente,$nombre,$apellido,$pasaporte,$nacionalidad,$edad,$consulta){
		 // tcliente (idcliente ,cnombre ,capellido ,cpasaporte ,cnacionalidad ,cedad )
	 if($consulta=="I"){
		$sql = " INSERT INTO  TCLIENTE VALUES ( NULL ,'".$nombre."','".$apellido."','".$pasaporte."','".$nacionalidad."','".$edad."' )";
	   }else
	   if($consulta=="A"){
		  $sql = " UPDATE TCLIENTE SET ".
		  								" cnombre =".$nombre.",".
										" capellido =".$apellido.",".
										" pasaporte =".$pasaporte.",".
										" cnacionalidad =".$nacionalidad.",".
										" cedad =".$edad." ".
										" WHERE idcliente =".$idcliente."";
				echo " <script language='JavaScript'> 
                alert('Sus Datos Fueron Guardados Correctamente'); 
                </script>";
		   }
		 
		  mysql_query($sql);
		}
		
	 public function MantenimientoTHotel($idhotel,$nombre,$direccion,$categoria,$telefono,$descripcion,$consulta){
		//thotel (`idhotel` ,`hnombre` ,`hdireccion` ,`categoria` ,`ctelefono` ,`cdescripcion`)
	 if($consulta=="I"){
		$sql = " INSERT INTO  THOTEL VALUES (NULL ,'".$nombre."','".$direccion."','".$categoria."','".$telefono."','".$descripcion."' )";
		echo " <script language='JavaScript'> 
                alert('Sus Datos Fueron Guardados Correctamente'); 
                </script>";
	   }else
	   if($consulta=="A"){
		  $sql = " UPDATE THOTEL SET ".
		  								" hnombre =".$nombre.",".
										" hdireccion =".$direccion.",".
										" categoria =".$categoria.",".
										" ctelefono =".$telefono.",".
										" cdescripcion =".$descripcion." ".
										" WHERE idhotel =".$idhotel."";
		   }
		  mysql_query($sql);
		}
		
  public function MantenimientoTtour($idtour,$nombre,$costoreferencial,$descripcion,$consulta){
		//`ttour`(`idtour` ,`tnombre` ,`costoreferencial` ,`tdescripcion`)
	 if($consulta=="I"){
		$sql = " INSERT INTO  TTOUR VALUES (NULL ,'".$nombre."','".$costoreferencial."','".$descripcion."' )";
		echo " <script language='JavaScript'> 
                alert('Sus Datos Fueron Guardados Correctamente'); 
                </script>";
	   }else
	   if($consulta=="A"){
		  $sql = " UPDATE TTOUR SET ".
		  								" tnombre =".$nombre.",".
										" costoreferencial =".$costoreferencial.",".
										" tdescripcion =".$descripcion."".
										" WHERE idtour =".$idtour."";
		   }
		  
		  mysql_query($sql);
		}
		
	
	public function MantenimientoTguia($idguia,$gnombre,$gapellido,$gsexo,$gtelefono,$cdescripcion,$consulta){
		//'tguia` (`idguia` ,`gnombre` ,`gapellido` ,`gsexo` ,`gtelefono` ,`cdescripcion`)
	 if($consulta=="I"){
		$sql = " INSERT INTO  TGUIA VALUES (NULL ,'".$gnombre."','".$gapellido."','".$gsexo."','".$gtelefono."','".$cdescripcion."' )";
	    echo " <script language='JavaScript'> 
                alert('Sus Datos Fueron Guardados Correctamente'); 
                </script>";
	   }else
	   if($consulta=="A"){
		  $sql = " UPDATE TGUIA SET ".
		  								" gnombre =".$gnombre.",".
										" gapellido =".$gapellido.",".
										" gsexo =".$gsexo.",".
										" gtelefono =".$gtelefono.",".
										" cdescripcion =".$cdescripcion."".
										" WHERE idguia =".$idguia."";
		   }
		  mysql_query($sql);
		}
		

	
	public function MantenimientoTagencia($idagencia,$anombre,$adireccion,$atelefono,$consulta){
		//`tagencia` (`idagencia` ,`anombre` ,`adireccion` ,`atelefono`)
	 if($consulta=="I"){
		$sql = " INSERT INTO  TAGENCIA VALUES (NULL ,'".$anombre."','".$adireccion."','".$atelefono."' )";
		echo " <script language='JavaScript'> 
                alert('Sus Datos Fueron Guardados Correctamente'); 
                </script>";
	   }else
	   if($consulta=="A"){
		  $sql = " UPDATE TAGENCIA SET ".
		  								" anombre =".$anombre.",".
										" adireccion =".$adireccion.",".
										" atelefono =".$atelefono."".
										" WHERE tagencia =".$tagencia."";
										
		   }
		  mysql_query($sql);
		}
public function MantenimientoTempleado($idempleado,$enombre,$eapellido,$edni,$edireccion,$etelefono,$ecargo,$epassword,$etipo,$consulta){
		//`templeado` (`idempleado`,`enombre`,`eapellido`,`edni`,`edireccion`,`etelefono`,`ecargo`,`epassword`,`etipo`,`eestado`)
	 if($consulta=="I"){
		$sql = " INSERT INTO  TEMPLEADO VALUES (NULL ,'".$enombre."','".$eapellido."','".$edni."','".$edireccion."','".$etelefono."', '".$ecargo."', MD5( '".$epassword."' ) ,  '".$etipo."',  '1' )";
		echo " <script language='JavaScript'> 
                alert('Sus Datos Fueron Guardados Correctamente'); 
                </script>";
	   }else
	   if($consulta=="A"){
		  $sql = " UPDATE TEMPLEADO SET ".
		  								" enombre =".$enombre.",".
										" eapellido =".$eapellido.",".
										" edni =".$edni.",".
										" edireccion =".$edireccion.",".
										" etelefono =".$etelefono.",".
										" ecargo =".$ecargo.",".
										" etipo =".$etipo."".
										" WHERE idempleado =".$idempleado."";
		   }
		   else
		   if($consulta=="PA"){
		  $sql = " UPDATE TEMPLEADO SET ".
		  								" ecargo =".$ecargo.",".
										" epassword =MD5( '".$epassword."' ),".
										" etipo =".$etipo.",".
										" eestado =".$eestado."".
										" WHERE idempleado =".$idempleado."";
		   }
		  mysql_query($sql);
		}
		
	public function BuscarCliente($busqueda){		
		$sql = "SELECT * FROM tcliente WHERE cpasaporte LIKE '%$busqueda%' OR  capellido LIKE '%$busqueda%' OR cnombre LIKE '%$busqueda%'  LIMIT 10;";	 
		 return mysql_query($sql);
		}
			
	
		public function ConsultaReserva($id){
		 $consulta=" SELECT MAX(idreserva) FROM TRESERVA WHERE idcliente = ".$id;
         $resultado=mysql_query($consulta);		 
		 return $resultado;
		}
		
	public function MantenimientoTDetalleTour($iddetalle,$idreserva,$idtour,$idguia,$idagencia,$tipo,$precio,$consulta){
		//`tdetalletour` (`iddetalle` ,`idreserva` ,`idtour` ,`idguia` ,`descripcion` )
	 if($consulta=="I"){
		$sql = " INSERT INTO  TDETALLETOUR VALUES ( NULL,'".$idreserva."','".$idtour."','".$idguia."','".$idagencia."','".$tipo."','".$precio."','1' )";
	   }else
	   if($consulta=="A"){
		   //DELETE FROM `tdetalletour` WHERE `tdetalletour`.`iddetalle` = 2 LIMIT 1;
		  $sql = " UPDATE   TDETALLETOUR SET A=0 WHERE  iddetalle= ".$iddetalle;
		  echo("DATO ELIMINADO ...");
		   }
		  mysql_query($sql);
		}
		
		public function Login($usu,$pass){
		 $consulta= "select * from TEMPLEADO where enombre=".$usu." and epassword= MD5('".$pass."')";
		 $resultado=mysql_query($consulta);		 
		 return $resultado;
		}
		
		public function ConsultaDetalleTour($idtour){
		 $consulta=" SELECT MAX(iddetalle) FROM TDETALLETOUR WHERE idtour = ".$idtour;
         $resultado=mysql_query($consulta);		 
		 return $resultado;
		}
//`treserva` (`idreserva` ,`idhotel` ,`idcliente` ,`idendoce` ,`bfecha` ,`bguia` ,`btrasporte` ,`balimento` ,`btipocliente` ,`bfecha_inicio` ,`bfecha_fin` ,`btipobagon` ,`bmachupicchu` ,`bhorasalida` ,`bhorallegada`)

	public function MantenimientoReserva($idreserva,$idhotel ,$idcliente ,$bfecha ,$bguia ,$btrasporte ,$balimento ,$btipocliente ,$bfecha_inicio ,$bfecha_fin ,$btipobagon ,$bmachupicchu ,$bhorasalida ,$bhorallegada,$op,$mensaje,$consulta){
	 if($consulta=="I"){
		$sql = " INSERT INTO  TRESERVA VALUES (NULL ,'".$idhotel."','".$idcliente."','".$bfecha."','".$bguia."','".$btrasporte ."','".$balimento."','".$btipocliente."','".$bfecha_inicio."','".$bfecha_fin ."','".$btipobagon."','".$bmachupicchu ."','".$bhorasalida ."','".$bhorallegada."','".$op."','".$mensaje."' )";
	   }else	  
	   if($consulta=="A"){
		   $sql = " UPDATE   TRESERVA SET bhorasalida='".$bhorasalida."',bhorallegada='".$bhorallegada."',bopcional='".$op."',bobservacion='".$mensaje."'  WHERE idreserva='".$idreserva."'";
		   echo " <script language='JavaScript'> 
                alert('Sus Datos Fueron Actualizados Correctamente'); 
                </script>";
		   }
	   
	   
		  mysql_query($sql);
		}
		public function MantenimientoElimimaReserva($idreserva)
		{
		$sql = " SELECT  dt.iddetalle, t.tnombre,t.costoreferencial
					FROM tdetalletour AS dt, ttour AS t
					WHERE dt.idtour= t.idtour
					  AND dt.A='1'
					  AND dt.idreserva='".$idreserva."'";
  		return mysql_query($sql);
		}
		
		public function MetodoReporteReserva($fecha,$idtour)
		{
		 $sql=" SELECT treserva.idreserva,CONCAT( cnombre, ', ', capellido ) AS nombre,cpasaporte, cnacionalidad,btipocliente,anombre, bopcional,hnombre, bhorasalida, bhorallegada , treserva.bobservacion
				
				FROM treserva , Tdetalletour , tcliente , thotel, tagencia
				WHERE treserva.idreserva= Tdetalletour.idreserva
					AND  treserva.idhotel = thotel.idhotel
					AND  tagencia.idagencia = Tdetalletour.idagencia
					AND  tcliente.idcliente = treserva.idcliente
					AND  tdetalletour.A= '1'
					AND   treserva.bfecha_inicio= '".$fecha."'
					AND   Tdetalletour.idtour = '".$idtour."'";	
				return mysql_query($sql);
		}
	}

?>
</body>
</html>