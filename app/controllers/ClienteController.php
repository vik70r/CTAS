<?php

class ClienteController extends BaseController
{
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
	
	public function insertCliente()
	{
				$servicios = Servicio::all();
				return View::make('cliente.insertCliente');
				
				
	}
	
	public function ReservaBoleto()
	{
				$servicios = Servicio::all();
				return View::make('cliente.ReservaBoleto');
				
				
	}
	public function inicio()
	{
				$servicios = Servicio::all();
				return View::make('cliente.inicio');
				
				
	}
	public function about()
	{
				$servicios = Servicio::all();
				return View::make('cliente.about');
				
	}
	public function blog()
	{
				$servicios = Servicio::all();
				return View::make('cliente.blog');
	}
	public function services()
	{
				$servicios = Servicio::all();
				return View::make('cliente.services');
				
	}
	public function contact()
	{
				$servicios = Servicio::all();
				return View::make('cliente.login');
				
	}
	public function paquetes()
	{
				$servicios = Servicio::all();
				return View::make('cliente.paquetes');
				
	}
	public function reserva()
	{
				$servicios = Servicio::all();
				return View::make('cliente.reserva');
				
	}
	public function reserva2()
	{
				$servicios = Servicio::all();
				return View::make('cliente.reserva2');
				
	}
	public function index($registros=20)
	{
		//$cod="1";
		//$datos = Cliente::paginate($registros);

		$clientes=Tcliente::all();
		//$clientes = Cliente::where('codCarrera','=',$cod)->get();
		$datos = DB::table('tcliente')
        				
        				->select('tcliente.idcliente', 'tcliente.capellido', 'tcliente.cnombre', 'tcliente.cpasaporte','tcliente.cnacionalidad','tcliente.cedad')
        				->get();
		return View::make('cliente.index',compact("datos"),array('clientes'=>$clientes));
	}

	

	
	public function edit($cod)
	{
		$cliente = Cliente::where('id','=',$cod)->firstOrFail();
		return View::make('cliente.edit',array('cliente'=>$cliente));
	}
	
	public function deshabilitar($cod)
	{
		DB::table('cliente')
        		->where('id', $cod)
        		->update(array('estado' => 0));
		return Redirect::to('clientes');
	}

	public function habilitar($cod)
	{
		DB::table('cliente')
        		->where('id', $cod)
        		->update(array('estado' => 1));
		return Redirect::to('clientes');
	}

	public function update($cod)
	{
		$cliente = Tcliente::where('idcliente','=',$cod)->firstOrFail();
		if(is_object($cliente))
		{
			$cliente->cnombre = Input::get('cnombre');
			$cliente->capellido = Input::get('capellidos');
			$cliente->cpasaporte = Input::get('cpasaporte');
			$cliente->cnacionalidad = Input::get('cnacionalidad');
			$cliente->cedad = Input::get('cedad');
			$cliente->save();
			return Redirect::to('clientes');
		} else {
			Redirect::to('500.html');
		}
	}

	public function updatePass($cod){
		$cliente = Cliente::where('idcliente', '=',$cod)->firstOrFail();
		$pass_old = Input::get('pAnterior');
		$pass = Input::get('password');
		if(is_object($cliente))
		{
			$cliente->password = $pass;
			$cliente->save();
			return Redirect::to('clientes');
		} else {
			Redirect::to('500.html');
		}
	}

	public function profile($cod)
	{
		$cliente = Tcliente::where('idcliente','=',$cod)->firstOrFail();
		if (is_object($cliente))
		{
			return View::make('cliente.profile',array('cliente'=>$cliente));
		} else {
			return Redirect::to('404.html');
		}
	}

	public function imagen($id)
	{
			$cliente = Cliente::where('id','=',$id)->firstOrFail();
			return View::make('cliente.imagen',array('cliente'=>$cliente));
	}

	public function uploadImage($id)
	{
		$mensaje = "Ocurrio Error";
		if(Input::file("foto")->isValid())
		{
			$file = Input::file("foto");
			$fileName = Input::file('foto')->getClientOriginalName();
			$cliente = Cliente::where('id','=',$id)->firstOrFail();
			$cliente->foto = md5($id."-".$fileName).'.'.Input::file('foto')->getClientOriginalExtension();
			if($cliente->save())
			{
				Input::file('foto')->move('assets/foto',$cliente->foto);
				$mensaje = "Imagen actualizado";
			}
		}
		return Redirect::to('cliente/profile/'.$id)->withErrors($mensaje);
	}

	public function changePass($id = null)
	{
        if (is_null($id) or ! is_numeric($id))
		{
			return Redirect::to('404.html');
		} else {
			$cliente = Cliente::where('id','=',$id)->firstOrFail();
			if (is_object($cliente))
			{
				$cliente->pasword = Input::get('password');
				return View::make('cliente.change_pass',array('cliente'=>$cliente));
			} else {
				return Redirect::to('404.html');
			}
		}

	}
}