<?php 
	$criteria = new CDbCriteria;
	$criteria->condition = "id_contrato=".$id_contrato;
	//Contrato 
	$modelContrato = ConContrato::model()->find($criteria);
	//Cliente
	$modelCliente = ConCliente::model()->find($criteria);
	//Servicios
	$modelServicios = ConDetServicios::model()->find($criteria);
 ?>

<?php 
	
	$this->menu=array(
		array('label'=>'Contratos', 'url'=>array('ConContrato/admin')),
		array('label'=>'Cliente', 'url'=>array('ConCliente/admin')),
		array('label'=>'Servicios', 'url'=>array('ConServicios/admin')),
	);

	$this->widget('zii.widgets.jui.CJuiTabs',array(
				//'cssFile'=>'cjuitab.css',
			    'tabs'=>array(
			        'Contrato'=>array(
			        	'model',
			        	'content'=>$this->renderPartial(
			                '/ConContrato/view',
			                array(
			                	'model'=>$modelContrato,
			                	'id_contrato'=>$id_contrato
			                ),
			                TRUE
			            )
			        ),
			        'Cliente'=>array(
			        	'model',
			        	'content'=>$this->renderPartial(
			                '/ConCliente/view',
			                array(
			                	'model'=>$modelCliente,
			                	'id_contrato'=>$id_contrato
			                ),
			                TRUE
			            )
			        ),
			        'Servicios'=>array(
			        	'model',
			        	'content'=>$this->renderPartial(
			                '/ConDetServicios/view',
			                array(
			                	'model'=>$modelServicios,
			                	'id_contrato'=>$id_contrato
			                ),
			                TRUE
			            )
			        ),
		        ),

	    'options'=>array(
	        'collapsible'=>true,
	    ),
	    'id'=>'MyTab-Menu',
	));

 ?>