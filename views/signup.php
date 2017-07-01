<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="jumbotron">
					<h1>Вас приветствует API Other Taxi</h1>
					<p class="">С помощью API Other Taxi, Вы сможете получать списки клиентов, которые нуждаются в Ваших услугах. Для того чтобы начать пользоваться нашим сервисом, Вам необходимо зарегистрироваться! Также Вы можете узнать о нашем сервисе и доступных возможностях в документации.</p>
					<p>
						<a class="btn btn-primary btn-lg" href="<?php print RESOURCE . DOCS; ?>" role="button">Документация</a>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form class="form-horizontal" method="post">
			  <div class="form-group">
			    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputName" class="col-sm-2 control-label">Имя</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="name" id="inputName" placeholder="Имя организации">
			    </div>
			  </div>
			  <input type="hidden" name="signup" value="<?php print Hash::unique();?>">
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Зарегистрироваться</button>
			    </div>
			  </div>
			</form>
		</div>
		</div>
	</div>
</body>