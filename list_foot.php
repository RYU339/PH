<script type="text/javascript">
function view(opt) {
  if(opt) {
	buttonSearch.style.display = "none";
	divSearch.style.display = "block";
  }
  else {
	buttonSearch.style.display = "block";
	divSearch.style.display = "none";
  }
}
</script>
</form>
<form method=get name=search action=<?=$PHP_SELF?>><input type=hidden name=id value=<?=$id?>><input type=hidden name=select_arrange value=<?=$select_arrange?>><input type=hidden name=desc value=<?=$desc?>><input type=hidden name=page_num value=<?=$page_num?>><input type=hidden name=selected><input type=hidden name=exec><input type=hidden name=sn value="on"><input type=hidden name=ss value="off"><input type=hidden name=sc value="on"><input type=hidden name=category value="<?=$category?>">
<div id="N_foot">
	<div class="left">
		<div id="buttonSearch">
			<input type="button" class="button_i margin_no" value="SEARCH" onmouseover="view(true);" onmouseout="view(false);" onfocus="this.blur()">
		</div>
		<div id="divSearch" onmouseover="view(true);" onmouseout="view(false);" style="display:none;float:left;">
			<input type="text" name="keyword" value="<?=$keyword?>" class="input_s" autofocus><input type="submit" class="button_i" value="SEARCH" onfocus="this.blur()">
		</div>
	</div>
	<div class="right page_no"><?=$a_prev_page?>&#9664;&#65039;</a><?=$print_page?><?=$a_next_page?>&#9654;&#65039;</a></div>
	<div class="clear"></div>
</div>
</form>