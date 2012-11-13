<?php
/*
Module-Version: 0.1
Author:         Tim Filler (elricco)
Specials:       For landing Blocks on startpage or landingpages
                defined on grid system (usual width: 280px)
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
                REX_VALUE[7]  - Buttonclass (none, .small_button, .big_button)
                REX_VALUE[8]  - Linktext
*/

  //Variables
  $output   = '';
  $bclass1  = '';
  $bclass2  = '';
  
  //Functions
  
  //Generate Output
  if("REX_VALUE[1]" != '')
  {
    $output  = '<div class="landingblock grid_6">'."\n";
    
    $output .= '  <div class="linkblock">'."\n";
    $output .= generateLink("REX_LINK_ID[1]","REX_VALUE[3]","REX_VALUE[4]","REX_VALUE[5]");
    $output .= generateLink("REX_LINK_ID[2]","REX_VALUE[6]","REX_VALUE[7]","REX_VALUE[8]");    
    $output .= '  </div>'."\n";
    $output .= '</div>'."\n";
  }  
  
  
  
  
  //Output
  print $output;
?>