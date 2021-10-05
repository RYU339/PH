<div class="N_main N_notice">
	<? if($is_admin||$data[ismember]==$member[no]) {?>
	<div class="button_md">
		<?=$a_modify?>MODIFY</a>&nbsp;<?=$a_delete?>DELETE</a>
	</div>
	<?}?>
	<div class="main_text">
		<span class="notice_badge">&#10033;</span><?=$data[memo]?>
	</div>
</div>