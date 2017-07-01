<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="jumbotron">
				<h1>Восстановление пароля</h1>
				<p>Введите свой email адрес</p>
				<form class="form-inline" method="POST" action="">
				  <div class="form-group">
				    <label class="sr-only" for="label-email">Email адрес</label>
				    <input type="email" class="form-control" name="email" id="label-email" placeholder="Email">
				  </div>
				  <input type="hidden" name="recovery" value="<?php print Hash::unique();?>">
				  <button type="submit" class="btn btn-default">Восстановить</button>
				</form>
			</div>
		</div>
	</div>
</div>