<div id="N_write">
<form method="post" name="write" action="write_ok.php" onsubmit="return check_submit();" enctype="multipart/form-data">
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
<input type="hidden" name="subject" value="SKIN-BY-Shadowy">

<div class="row1">
  <?=$hide_notice_start?><label><input type="checkbox" name="notice" <?=$notice?> value="1"> NOTICE </label><?=$hide_notice_end?>
  <?=$hide_html_start?><label><input type="checkbox" name="use_html" <?=$use_html?> value="1"> HTML </label><?=$hide_html_end?>
  <? if($setup[use_secret]&&$member[no]) { ?><label><input type="checkbox" name="is_secret" <?=$secret?> value="1"> SECRET </label><?}?>

</div>

<div class="row2">
  <table cellpadding="0" cellspacing="0" border="0" width="100%">
    <tr>
      <?=$hide_start?>
      <td width="92">
          <input type=text class="w_input_s" name=name value="<?=$name?>" maxlength=20 placeholder="NAME">
          <input type=password class="w_input_s" name=password maxlength=20 placeholder="PASSWORD">
      </td>
      <?=$hide_end?>
      <td width="100%">
        <textarea name="memo" class="w_textarea"><?=$memo?></textarea>
      </td>
  </table>
</div>

<div class="w_button">
  <input type=submit value="SUBMIT" class="button_i button_submit margin_no" accesskey="s" onfocus="this.blur()">
</div>
</form>
<div class="clear"></div>
</div>