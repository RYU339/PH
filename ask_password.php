<form method="post" name="delete" action="<?=$target?>">
<input type="hidden" name="page" value="<?=$page?>">
<input type="hidden" name="id" value="<?=$id?>">
<input type="hidden" name="no" value="<?=$no?>">
<input type="hidden" name="select_arrange" value="<?=$select_arrange?>">
<input type="hidden" name="desc" value="<?=$desc?>">
<input type="hidden" name="page_num" value="<?=$page_num?>">
<input type="hidden" name="keyword" value="<?=$keyword?>">
<input type="hidden" name="category" value="<?=$category?>">
<input type="hidden" name="sn" value="<?=$sn?>">
<input type="hidden" name="ss" value="<?=$ss?>">
<input type="hidden" name="sc" value="<?=$sc?>">
<input type="hidden" name="mode" value="<?=$mode?>">
<input type="hidden" name="c_no" value="<?=$c_no?>">
<div id="S_error">
	<div class="error_message"><?=$title?></div>
	<? if(!$member[no]) { ?>
	<p><input type="password" class="input_s" name="password" placeholder="PASSWORD"></p>
	<?}?>
	<p class="error_button">
		<input type="submit" class="button_i button_submit" value="SUBMIT" onfocus="this.blur()" accesskey="s">
		<input type="button" class="button_i" value="BACK" onclick="history.back()" onfocus="this.blur()">
	</p>
</div>
</form>