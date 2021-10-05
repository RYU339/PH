<form>
<div id="S_error">
	<div class="error_message"><?echo $message;?></div>
	<? if(!$url) { ?>
	<p><input type="button" class="button_i" value="BACK" onclick="history.back()" onfocus="this.blur()"></p>
	<? } else { ?>
	<p><input type="button" class="button_i" value="BACK" onclick="location.href='<?echo $url;?>'" onfocus="this.blur()"></p>
	<?}?>
</div>
</form>