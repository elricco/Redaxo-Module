<?php
/*
Module-Version: 0.1
Author:         Tim Filler (elricco)
Specials:       For landing Blocks on startpage or landingpages
                defined on 960gs Gridsystem (usual width: 280px)
                For UTF-8
          
Values:         REX_VALUE[1]  - Headline
                REX_VALUE[2]  - Text
                REX_MEDIA[1]  - Picture
                REX_LINK[1]   - Link (internally)
                REX_VALUE[3]  - Link (externally)
                REX_VALUE[4]  - Buttonclass
                REX_VALUE[5]  - Linktext
                REX_LINK[1]   - Link (internally)
                REX_VALUE[6]  - Link (externally)
                REX_VALUE[7]  - Buttonclass
                REX_VALUE[8]  - Linktext
*/
?>
<strong>&Uuml;berschrift:</strong>
<br />
<input type="text" size="80" name="VALUE[1]" value="REX_VALUE[1]" />
<br /><br />
<strong>Fliesstext: (Sub-Head in H3)</strong>
<br />
<textarea name="VALUE[2]" class="tinyMCEEditor-table" style="width:725px;height:350px;">REX_VALUE[2]</textarea>
<br /><br />
<strong>Bild: (wird auf Endgr&ouml;&szlige beschnitten)</strong>
<br />
REX_MEDIA_BUTTON[1]
<br />
<hr />
<table width="100%">
  <tr>
    <td><strong>Link I:</strong></td>
    <td>Intern wird Extern <strong>IMMER</strong> vorgezogen</td>
  </tr>
  <tr>
    <td>Intern:<br />REX_LINK_BUTTON[1]</td>
    <td>Extern:<br /><input type="text" size="50" name="VALUE[3]" value="REX_VALUE[3]" /></td>
  </tr>
  <tr>
    <td>Buttonklasse: 
      <?php
        $mode = array("0"=>"keine","1"=>"Kleiner Button", "2"=>"Gro&szlig;er Button");

        echo '<select id="bclass1" name="VALUE[4]" >';
        foreach ($mode as $key => $plaintext) {
          echo '<option value="'.$key.'" ';
          if ("REX_VALUE[4]"=="$key") {
            echo 'selected="selected" ';
          }
          echo '>'.$plaintext.'</option>';
        }
        echo '</select>';
      ?>
    <td>Linktext:<br /><input type="text" size="50" name="VALUE[5]" value="REX_VALUE[5]" /></td>
  </tr>
  <tr>
    <td colspan="2"><hr /></td>
  </tr>
  <tr>
    <td><strong>Link II:</strong></td>
    <td>Intern wird extern <strong>IMMER</strong> vorgezogen</td>
  </tr>
  <tr>
    <td>Intern:<br />REX_LINK_BUTTON[2]</td>
    <td>Extern:<br /><input type="text" size="50" name="VALUE[6]" value="REX_VALUE[6]" /></td>
  </tr>
  <tr>
    <td>Buttonklasse: 
      <?php
        $mode2 = array("0"=>"keine","1"=>"Kleiner Button", "2"=>"Gro&szlig;er Button");

        echo '<select id="bclass2" name="VALUE[7]" >';
        foreach ($mode2 as $key2 => $plaintext2) {
          echo '<option value="'.$key2.'" ';
          if ("REX_VALUE[7]"=="$key2") {
            echo 'selected="selected" ';
          }
          echo '>'.$plaintext2.'</option>';
        }
        echo '</select>';
      ?>
    <td>Linktext:<br /><input type="text" size="50" name="VALUE[8]" value="REX_VALUE[8]" /></td>
  </tr>
</table>