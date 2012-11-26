<strong>Suche anzeigen:</strong>
<br />
<?php
  foreach (array("0"=>"nein", "1"=>"ja") as $value => $key)
  {
	echo '<option value="'.$value.'" ';
	
	if ( "REX_VALUE[1]"=="$value" )
	{
	  echo 'selected="selected" ';
	}
	echo '>'.$key.'</option>';
  }
?>
<br />
<strong>Text anzeigen:</strong>
<br />
<?php
  foreach (array("0"=>"nein", "1"=>"ja") as $value => $key)
  {
	echo '<option value="'.$value.'" ';
	
	if ( "REX_VALUE[2]"=="$value" )
	{
	  echo 'selected="selected" ';
	}
	echo '>'.$key.'</option>';
  }
?>
<br />
<strong>&Uuml;berschrift:</strong>
<br />
<input type="text" size="80" name="VALUE[3]" value="REX_VALUE[3]" />
<br />
<strong>Text:</strong>
<br />
<textarea name="VALUE[4]" class="tinyMCEEditor-table" style="width:725px;height:350px;">REX_VALUE[4]</textarea>
<br />