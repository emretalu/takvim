<form action="<?=site_url();?>/ekle" method="post">
<input type="text" value="Şu olay oldu..." onclick="this.value=''" name="olay"> <input type="submit" value="ekle">
</form>
<br/><br/>

<?php foreach($olay as $o): ?>
	<a class="big" href="<?=site_url();?>/goster/<?php echo $o->id; ?>/">
	<span class="item">
	<?php echo $o->id; ?>. [<?php echo date('d/m/Y',strtotime($o->olay_tarih)); ?>] - <?php echo $o->olay_adi; ?>
	</span>
	</a><br/>
<?php endforeach; ?>


<?php if(strlen($pagination)): ?>
	<div>
	<br />
		<?php echo $pagination; ?>
	</div>
<?php endif; ?>