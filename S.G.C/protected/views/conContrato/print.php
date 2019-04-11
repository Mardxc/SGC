

<?php
setlocale(LC_ALL,"es_ES");
$pdf = Yii::createComponent('application.extensions.MPDF57.mpdf');

$html='<style>
	*{
		font-size: 9px;
	}
	table{
		width: 100%;
	}
	td{
		text-align: center;
	}
	ul{
		text-align: justify;
	}
	.att{
		text-align: right;
	}
	.fecha{
		text-align: right;
	}
	.imp{
		color: red;
		font-weight: bold;
	}
	.zong{
		width: 100%;
		text-align: center;
	}
	.zong div{
		display: inline-block;
		text-align: center;
		width: 80%;
	}
</style>
<div class="con">
	<figure>
	</figure>
	<p class="att">
		 <b>ATENCION A CLIENTES:   87 1 14 41</b>
	</p>
	<h4>DATOS DEL CONTRATO</h4>
	<table id="yw0" class="detail-view2">
		<tr>
			<td>
				<b>NOMBRE DEL CLIENTE</b>
			</td>
			<td>
			'.ConContrato::getCliente($model->id_contrato).'
			</td>
		</tr>
		<tr class="odd">		
			<td> 
				<b>DIA DEL EVENTO</b>
			</td>
			<td> '.$model->fecha_evento.'</td>
		</tr>
		<tr class="even">		
			<td> 
				<b>TIPO DE EVENTO </b>
			</td>
			<td> '.EvTipoEvento::getTipoEvento($model->id_eve_tipo_evento).'</td>
		</tr>
		<tr class="even">		
			<td> 
				<b>LUGAR DEL EVENTO</b>
			</td>
			<td> '.InvMobiliario::getLugar($model->id_inv_lugar).'</td>
		</tr>
		<tr class="even">		
			<td> 
				<b>HORA DE INICIO</b>
			</td>
			<td> '.$model->hora_inicial.'</td>
		</tr>
		<tr class="odd">		
			<td> 
				<b>HORA DE FINALIZACION</b>
			</td>
			<td> '.$model->hora_final.'</td>
		</tr>
		<tr>
			<td>
				<b>TELEFONO</b>
			</td>
			<td> '.ConCliente::getTel($model->id_contrato).'</td>
		</tr>
		<tr>
			<td>
				<b>DOMICILIO</b>
			</td>
			<td> '.ConCliente::getDom($model->id_contrato).' COLONIA '.ConCliente::getCol($model->id_contrato).'</td>
		</tr>
		<tr class="even">		
			<td> 
				<b>ASISTENTES</b>
			</td>
			<td> '.$model->asistentes.'</td>
		</tr>
	</table>
	<h5>CLAUSULAS DE ESTE CONTRATO:</h5>
	<ul>1.*EL ARRENDATARIO SE HACE CARGO DE LOS DAÑOS FISICOS Y LEGALES EN CASO DE CUALQUIER PERCANCE CON SUS INVITADOS.</ul>
	<ul>2.*EL PERSONAL DE LA EMPRESA SOLO ESTA A CARGO DE LO ESTIPULADO EN EL CONTRATO.
	EN CASO DE FALLAS FUERA DE NUESTRO ALCANCE LA EMPRESA NO REPONE EL TIEMPO PERDIDO. </ul>
	<ul>3. *LA EMPRESA RESPETA EL CONTRATO DE NUMERO DE INVITADOS SOBRE CUPO DE LO ESTIPULADO TENDRÁ COSTO ADICIONAL. </ul>
	<ul>4. *EN CASO QUE CONTRATE BANQUETE LA EMPRESA NO SE HACE RESPONSABLE DE PLATILLOS EXTRAS SIN PREVIO AVISO.  UNA VEZ ELEGIDO EL BANQUETE NO SE ACEPTAN CAMBIOS EN EL MENÚ. </ul>
	<ul>5*EL CONTRATO ES POR CINCO HORAS DESPUÉS DEL TIEMPO ESTIPULADO EN EL CONTRATO EL CLIENTE PAGARA LAS HORAS EXTRAS QUE DESEÉ. </ul>
	<ul>6* TIEMPO DEL CONTRATO NO CONTEMPLA REPARTIR LAS HORAS CONTRATADAS Y NO SE ALTERNA. EL CONTRATO ES POR 5 HORAS CONTINUAS,</ul>
	<ul>7. * SOLO SE ENTENDERÁ LA EMPRESA CON EL CLIENTE QUE HAYA FIRMADO ESTE CONTRATO.</ul>
	<ul>8.*SE DEBERÁ CUBRIR EL COSTO TRES DÍAS ANTES DEL EVENTO.</ul>
	<ul>9.* EL CAPITÁN LE VA HACER ENTREGA DE LA LOZA Y CRISTALERÍA AL CLIENTE, (AL FINAL DEL EVENTO)</ul>
	<ul>10. * CLIENTE VERIFICARA QUE LA LOZA Y CRISTALERÍA ESTE COMPLETA, DE LO CONTRARIO SE   COMPROMETE A PAGAR LOS DAÑOS O PÉRDIDAS QUE SEAN OCASIONADOS DURANTE EL EVENTO, ESTOS SERÁN CUBIERTOS POR EL CLIENTE.</ul>
	<ul>11.* EN CASO DE PLEITO LA EMPRESA SUSPENDERÁ EL EVENTO.</ul>
	<ul>12.* SE PROHÍBE EL SERVIR BEBIDAS ALCOHÓLICAS A MENORES DE EDAD.</ul>
	<ul>13. *LA EMPRESA NO SE HACE RESPONSABLE DE OBJETOS OLVIDADOS O EXTRAVIADOS DURANTE EL EVENTO (CUIDAR SUS PERTENENCIAS ES BAJO SU RESPONSABILIDAD Y NO DE LA EMPRESA).</ul>
	<ul>14.*AL CANCELAR EL CONTRATO NO SE HARÁ DEVOLUCIÓN DE ANTICIPO. Y DEVERAN DE CUBRIR EL $50% 100 DE SU CONTRATO</ul>
	<ul>15.* SI EL CLIENTE DISMINUYE EL NÚMERO DE INVITADOS NO BAJARA EL COSTO TOTAL DE ESTE CONTRATO</ul>
	<ul>16.*Y SI AUMENTA EL NÚMERO DE INVITADOS SERÁ DE ACUERDO AL COSTO TOTAL DIVIDIDO ENTRE EL NÚMERO DE COMENSALES.  </ul>
	<ul>17.* SE PROHÍBE INTRODUCIR BEBIDAS ALCOHÓLICAS DURANTE EL EVENTO.   </ul>                           
	<ul>18.* SOLO NOS COMPROMETEMOS A CUBRIR LO ESTIPULADO EN ESTE CONTRATO.</ul>
	<ul>19.* EN CASO DE DEMORA DE LIQUIDACIÓN   DEL CONTRATO SE COBRARÁ UN CINCO POR CIENTO DE INTERÉS MENSUAL.</ul>
	<ul>* DEBO Y PAGARE LA CANTIDAD DEL COSTO TOTAL QUE INDICA EL CONTRATO (DEL CUAL SE TENDRÁ QUE DAR UN CINCUENTA POR CIENTO DE ANTICIPO AL REALIZARLO) RECONOCIENDO COMO PROPIA LA FIRMA Y NOMBRE DEL CLIENTE.</ul>
	<ul class="imp">NOTA. Si tiene alguna duda de lo estipulado en este contrato favor de aclararlo antes de firmar, de lo contrario no se aceptan reclamaciones.  </ul>
	<ul class="imp">AVISO: solo lo escrito es válido en este Contrato. Nada de palabra asegúrese que lo que se le ofreció este en su contrato este bien estipulado   </ul>
	<br>
	<br>
	<div class="zong">
	<h4>Firmas</h4>
		<div class="cli">
			<p>__________________________________________________________________________</p>
			<p>'.ConContrato::getCliente($model->id_contrato).'</p>
		</div>
	<br>
	<br>
		<div class="pres">
			<p>__________________________________________________________________________</p>
			<p>REP. AMADEUS</p>
		</div>
	</div>
	<p class="fecha">
		<b>
			Rioverde, S.L.P. '. date('d').'/'. date('m').'/'. date('Y').'
		</b>
	</p>
</div>

';
$mpdf=new mPDF('win-1252','LETTER','','',15,15,25,12,5,7);
$mpdf->WriteHTML($html);
$mpdf->Output('Ficha-Contrato-'.ConContrato::getCliente($model->id_contrato).'.pdf','D');
exit;
?>