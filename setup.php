<div class="button_setup">
	<?=$a_login?>LOGIN</a>
	 <?=$a_logout?>LOGOUT</a>
	<?=$a_setup?>SETUP</a>
	<?=$memo_on_sound?>
</div>
<?	if($member['level']<=$setup['grant_write']){
	include "include/write.php";
	}?>