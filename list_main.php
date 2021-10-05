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
		<?	if($data[is_secret]&&!$is_admin&&$data[ismember]!=$member[no]&&$member[level]>$setup[grant_view_secret]) echo"<br><i><b>비밀글입니다.</b></i>&nbsp;&nbsp;비밀글은 작성자와 레벨 $setup[grant_view_secret] 이하 회원만 읽을 수 있습니다.<br>";
			else echo $data[memo]; ?>
	</div>
</div>