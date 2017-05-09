<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('partes/head_views');?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-2 col-md-2">
				<?php $this->load->view('partes/menu_views');?>    
			</div>
			<div class="col-sm-10 col-md-10">
				<div class="well">
					<h1>Nuevo Libro</h1>					
				</div>	            
				<?php echo form_open_multipart("registro_l", ['class' => 'form-signin', 'role' => 'form']); ?>
					<div class="form-group">
						<?php echo form_error('titulo'); ?>
						<?php echo form_input(['name' => 'titulo', 'id' => 'titulo', 'class' => 'form-control','placeholder' => 'ingrese titulo del libro', 'autofocus'=>'autofocus']); ?>
					</div>
					<div class="form-group">
						<?php echo form_error('edicion'); ?>
						<?php echo form_input(['name' => 'edicion', 'id' => 'edicion', 'class' => 'form-control','placeholder' => 'ingrese edicion']); ?>
					</div>
					<div class="form-group">
						<?php echo form_error('editorial'); ?>
						<?php echo form_input(['name' => 'editorial', 'id' => 'editorial', 'class' => 'form-control','placeholder' => 'ingrese editorial', 'type'=>'text']); ?>
					</div>
					<div class="form-group">
						<?php echo form_error('anio'); ?>
						<?php echo form_input(['name' => 'anio','id' => 'anio', 'class' => 'form-control','placeholder' => 'ingrese año de publicación']); ?>
					</div>
					<div class="form-group">
						<?php echo form_error('stock'); ?>
						<?php echo form_input(['type' => 'text','name' => 'stock', 'id' => 'stock', 'class' => 'form-control','placeholder' => 'ingrese stock']); ?>
					</div>
					<div class="form-group">
						<?php echo form_error('stock_minimo'); ?>
						<?php echo form_input(['type' => 'text','name' => 'stock_minimo', 'id' => 'stock_min', 'class' => 'form-control','placeholder' => 'ingrese stock minimo']); ?>
					</div>
					<div class="form-group">
						<?php echo form_error('fil'); ?>
						<?php echo form_input(['type' => 'file','name' => 'fil', 'id' => 'fil', 'class' => 'form-control']); ?>
					</div>
						<?php echo form_submit('agregar', 'Registrar',"class='btn btn-lg btn-success btn-block'"); ?>
					<?php echo form_close(); ?>
				<div>
						
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('partes/footer_views');?>	
</body>
</html>	