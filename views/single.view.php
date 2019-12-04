<?php require 'views/header.php'; ?>
		<div class="contenedor">
			<div class="post">
				<article>
					<h2 class="titulo"><?php echo $post['titulo']; ?></h2>
					<p class="fecha"><?php echo fecha($post['fecha']); ?></p>
					<div class="thumb">
						<img src="<?php echo RUTA; ?>imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo']; ?>">

						<p><?php echo nl2br($post['texto']); ?></p>
				
					</div>
				</article>
			</div>



		</div>

<?php require 'views/footer.php'; ?>