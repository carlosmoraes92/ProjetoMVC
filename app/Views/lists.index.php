<?php if (count($Lists) > 0): ?>
 
<div class="marginTop-20 table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr class="text-center">
				<th scope="col">Nome</th>
				<th scope="col">Telefone</th>
				<th scope="col">Estado</th>
				<th scope="col">Cidade</th>
				<th scope="col">País</th>
				<th scope="col">Alterações</th>
			</tr>
		</thead>
		<tbody>
		    <?php foreach ($Lists as $List): ?>
		 		<tr class="text-center">
					<th scope="row"><?php echo $List['location_name']; ?></td>
					<td><?php echo $List['location_number']; ?></td>  
					<td><?php echo $List['location_state']; ?></td>
					<td><?php echo $List['location_city']; ?></td>
					<td><?php echo $List['location_country']; ?></td>
					<td>
			            <a class="text-black" href="/editar/<?php echo $List['location_id']; ?>">Editar</a><br>
			            <a class="text-black" href="/remover/<?php echo $List['location_id']; ?>"
			               onclick="return confirm('Tem certeza de que deseja remover?');">
			           		Remover
			           	</a>
			        </td>
			    </tr>
		    <?php endforeach; ?>
		</tbody> 
	</table>
</div>
<?php else: ?>
	<p class="text-center">Nenhum usuário cadastrado</p>
<?php endif; ?>