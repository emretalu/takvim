<?php foreach ($olay as $i):?>
<h2><?php echo $i['id']?>. [<?php echo date('d/m/Y',strtotime($i['olay_tarih'])); ?>] - <?php echo $i['olay_adi']?></h2>

	<a class="big" href="<?=site_url();?>/sil/<?php echo $i['id']?>">
	<span class="item">
	Bu olayı sil
	</span>
	</a><br/>
<?php endforeach?>