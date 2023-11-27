<div class="container mt-5">
	<div class="row-cols-6">
		<h3>List Mahasiswa</h3>
		<ul class="list-group">
			<?php foreach ($data["genre"] as $genre) :?>
				<li class="list-group-item">
					<?= $genre["GenreName"]?>
					<a href="<?= BASEURL;?>/genre/index/<?= $genre['GenreID']?>" class="badge badge-primary">detail</a>
				</li>
			<?php endforeach;?>
		</ul>
	</div>
</div>

