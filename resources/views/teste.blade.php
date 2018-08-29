@include('partials.front')

<section id="clientes" class="clientes teste">
                
    <div class="container">
        <h2 class="center trick">Teste RP</h2>
        <ul class="collection with-header">
        	<li class="collection-header"><h4>Categorias</h4></li>
        	@foreach($categoria as $cat_item)
			<li class="collection-item"><?php echo $cat_item->categoria ?></li>
			@endforeach
		</ul>
    </div>

</section>

@include('partials.back')