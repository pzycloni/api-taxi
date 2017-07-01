<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="docs">Документация API</h2>
				<p>На странице документации представлены способы взаимодействия с сервисом посредством GET и POST запросов. Если после прочтения документации у Вас остались вопросы, напишите нам на электронную почту <a href="mailto:#">othertaxiapi@gmail.com</a></p>
				<p><a href="<? print RESOURCE; ?>">Вернуться на главную страницу</a></p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<p class="lead"><em>GET</em></p>
				<blockquote>
					<div class="list-group">
					  <a href="#" class="list-group-item active">
					    <h4 class="list-group-item-heading">Получение списка потенциальных клиентов за последние сутки</h4>
					    <p class="list-group-item-text"><em><? print RESOURCE_URL;?>clients/show/</em></p>
					  </a>
					</div>
					<div class="list-group">
					  <a href="#" class="list-group-item active">
					    <h4 class="list-group-item-heading">Получение списка потенциальных клиентов за последние n минут</h4>
					    <p class="list-group-item-text"><em><? print RESOURCE_URL;?>clients/show/n_minutes/</em></p>
					  </a>
					</div>
					<div class="list-group">
					  <a href="#" class="list-group-item active">
					    <h4 class="list-group-item-heading">Получение списка клиентов за последние сутки</h4>
					    <p class="list-group-item-text"><em><? print RESOURCE_URL;?>agreements/show/</em></p>
					  </a>
					</div>
					<div class="list-group">
					  <a href="#" class="list-group-item active">
					    <h4 class="list-group-item-heading">Получение списка клиентов за последние n минут</h4>
					    <p class="list-group-item-text"><em><? print RESOURCE_URL;?>agreements/show/n_minutes/</em></p>
					  </a>
					</div>
					<div class="list-group">
					  <a href="#" class="list-group-item active">
					    <h4 class="list-group-item-heading">Получение списка клиентов за последние n минут</h4>
					    <p class="list-group-item-text"><em><? print RESOURCE_URL;?>agreements/show/n_minutes/</em></p>
					  </a>
					</div>
				</blockquote>
				<p class="lead"><em>POST</em></p>
				<blockquote>
					<div class="list-group">
					  <a href="#" class="list-group-item active">
					    <h4 class="list-group-item-heading">Предложение клиенту с id_client свои услуги</h4>
					    <p class="list-group-item-text"><em><? print RESOURCE_URL;?>offers/create/id_client/sum/</em></p>
					  </a>
					</div>	
				</blockquote>
				<p class="lead"><em>Пример GET запроса</em></p>
				<div class="list-group">
				  <a href="#" class="list-group-item active">
				    <h4 class="list-group-item-heading">Получение списка потенциальных клиентов за последние двое суток</h4>
				    <br>
				    <code>
				    { 
					method: 'GET', 
					dataType: 'JSON', 
					contentType: 'application/json', 
					url: 'http://g91280jl.bget.ru', 
					data: { 
					token: 'your_token', 
					url: 'clients/show', 
					view: '2880' 
					}}
					</code>
				  </a>
				</div>	
			</div>
		</div>
	</div>
</body>