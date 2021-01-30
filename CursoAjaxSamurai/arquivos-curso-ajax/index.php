<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<head>
		<title>Curso de Ajax - EspecializaTi</title>

		<!--Bootstrap CSS-->
		<link rel="stylesheet" href="css/bootstrap.css">

		<link rel="stylesheet" href="css/style.css">
	</head>
<body>

<div class="container">
	<div class="text-center">
		<img src="imgs/especializati-logo.png" alt="EspecializaTi" class="logo">
	</div>
	
	<a class="btn-add" href="#" data-toggle="modal" data-target="#modalGestaoEspecializaTi">
		<img src="imgs/add.png" alt="Add" class="icon-image">
	</a>

	<a class="btn-refresh" href="#">
		<img src="imgs/refresh.png" alt="Add" class="icon-image">
	</a>

	<a href="#" class="btn btn-primary getjson">JSON</a>

	<a href="#" class="btn btn-default ajaxget">GET</a>

	<a href="#" class="btn btn-info ajaxpost">POST</a>

	<a href="#" class="btn btn-warning ajax">AJAX</a>

	<div class="preloader" style="display: none;">
		<p>Carregando os dados <img src="imgs/load.gif"></p>
	</div>

	<table class="table table-hover list-data">
		<tr>
			<th>COD.</th>
			<th>Nome</th>
			<th width="100px" align="center">Ações</th>
		</tr>

		<tr>
			<td>12312312</td>
			<td>Nome Produto</td>
			<td>
				<a href="#" class="edit" data-toggle="modal" data-target="#modalGestaoEspecializaTi">
					<img src="imgs/edit.png" alt="Edit" class="icon-image">
				</a>

				<a href="#" class="delete" data-toggle="modal" data-target="#modalConfirmacaoDeletar">
					<img src="imgs/delete.png" alt="Delete" class="icon-image">
				</a>
			</td>
		</tr>

	</table>

</div>


<!-- Modal -->
<div class="modal fade" id="modalGestaoEspecializaTi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header-especializati">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Gestão Produto</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="#" id="form-gestao">
        	<div class="alert alert-success" role="alert" style="display:none"></div>
			<div class="alert alert-warning" role="alert" style="display:none"></div>

        	<div class="form-group">
        		<input type="text" name="cod" class="form-control" placeholder="Código do Produto">
        	</div>
        	<div class="form-group">
        		<input type="text" name="nome" class="form-control" placeholder="Nome do Produto">
        	</div>

        	<div class="form-group">
        		<div class="preloader-form" style="display: none;">
					<p>Enviando dados do formulário... <img src="imgs/load.gif"></p>
				</div>
        	</div>
      </div>
      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	        <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete-->
<div class="modal fade" id="modalConfirmacaoDeletar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header-delete">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Deletar?</h4>
      </div>
      <div class="modal-body">
        Deseja realmente deletar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Deletar</button>
      </div>
    </div>
  </div>
</div>

	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


	<script>
		//Inicio do jQuery
		$(function(){
				jQuery(".getjson").click(function(){
					alert("Clicou em .getjson");
					return false;
				});		
		});
	</script>
</body>
</html>