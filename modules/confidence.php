
<confidence-intro>
  <confidence-grid>
    <?php include('confidence-data.php'); ?>
    <?php foreach ($confidenceData as $data) { ?> 
	
	<confidence-card>
		<picture class='grid-image'>
			<img src='<?=$data["img"]?>' loading='lazy' alt='$todo'>
		</picture>

		<section class="confidence-card-details">
			<h2><?=$data["heading"]?></h2>
			<p class='calm-voice'><?=$data["description"]?></p>
		</section>
	</confidence-card>
    <?php } ?>

  </confidence-grid>
</confidence-intro>
