<div class="N_main">
	<? if($is_admin||$data[ismember]==$member[no]) {?>
	<div class="button_md">
		<?=$a_modify?>MODIFY</a>&nbsp;<?=$a_delete?>DELETE</a>
	</div>
	<?}?>
	<div class="date"><div class="diag"></div>
		<div class="date_day"><?=$date=date("D",$data[reg_date])?></div>
		<div class="date_date">
			<div class="date_1"><?=$date=date("n",$data[reg_date])?></div>
			<div class="date_2"><?=$date=date("j",$data[reg_date])?></div>
		</div>
	</div>
	<div class="main_text">
		<?	if($data[is_secret]&&!$is_admin&&$data[ismember]!=$member[no]&&$member[level]>$setup[grant_view_secret]) echo"<br><i><b>��б��Դϴ�.</b></i>&nbsp;&nbsp;��б��� �ۼ��ڿ� ���� $setup[grant_view_secret] ���� ȸ���� ���� �� �ֽ��ϴ�.<br>";
			else echo $data[memo]; ?>
	</div>
</div>