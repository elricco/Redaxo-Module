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
                REX_VALUE[7]  - Buttonclass (none, .small-button, .big-button)
                REX_VALUE[8]  - Linktext
                
                ImageManager  - landing_pic (280 x 180px w crop)
*/

  //Variables
  $output   = '';
  //if you change the pics dimensions, change these also
  $imgw = 280;
  $imgh = 180;
  
  
  //Functions
  if(!function_exists("generateLink"))
  {
    function generateLink($intlink,$extlink,$linkclass,$linktext)
    {
      //Set Buttonclass
      switch ($linkclass)
      {
        case 1:
          $class = 'small-button';
          break;
        case 2:
          $class = 'big-button';
          break;
      }
      if ($extlink != '')
      {
        $bclass = ' class="'.$class.' external"';
      }
      else
      {
        $bclass = ' class="'.$class.'"';
      }
      //Internal Linkgeneration
      if($intlink != '')
      {
        $linkart  = OOArticle::getArticleById($intlink);
        $linkname = $linkart->getName();
        if($linktext != '')
        {
          $link = '<a'.$bclass.' href="'.rex_getUrl($intlink).'" title="'.$linktext.'">'.$linktext.'</a>'."\n";
        }
        else
        {
          $link = '<a'.$bclass.' href="'.rex_getUrl($intlink).'" title="'.$linkname.'">'.$linkname.'</a>'."\n";        
        }
      }
      //External Linkgeneration
      else
      {
        if($linktext != '')
        {
          $link = '<a'.$bclass.' href="'.$extlink.'" title="'.$linktext.'">'.$linktext.'</a>'."\n";
        }
        else
        {
          $link = '<a'.$bclass.' href="'.$extlink.'" title="Mehr erfahren &gt;">Mehr erfahren &gt;</a>'."\n";        
        }      
      }
      return $link;
    }
  }
  
  //Generate Output
  if("REX_VALUE[1]" != '')
  {
    $output  = '<div class="landingblock grid_6">'."\n";
    $output .= '  <div class="landing-head grid_6 first last">'."\n";
    $output .= '    <h2>REX_VALUE[1]</h2>'."\n";
    $output .= '  </div>'."\n";
    if("REX_MEDIA[1]" != '')
    {
      $mediafile = OOMedia::getMediaByFileName("REX_MEDIA[1]");
      //Just in case we need more infos
      $mediapath = $mediafile->getFullPath();
      $mediawidth = $mediafile->getWidth();
      $mediaheight = $mediafile->getHeight();
      $medianame = $mediafile->getTitle();
      
      $output .= '  <div class="landing-pic">'."\n";
      $output .= '    <img src="index.php?rex_img_type=landing_pic&amp;rex_img_file=REX_MEDIA[1]" alt="'.$medianame.'" width="'.$imgw.'" height="'.$imgh.'" />'."\n";
      $output .= '  </div>'."\n";
    }
    
    if(REX_IS_VALUE[2])
    {
      $output .= '  <div class="landing-text">'."\n";
      $output .= 'REX_HTML_VALUE[2]'."\n";
      $output .= '  </div>'."\n";
    }
    
    $output .= '  ';
    if("REX_LINK[1]" != '' || "REX_VALUE[3]" != '' || "REX_LINK[2]" != '' || "REX_VALUE[6]" != '')
    {
      $output .= '  <div class="landing-links">'."\n";
      $output .= generateLink("REX_LINK_ID[1]","REX_VALUE[3]","REX_VALUE[4]","REX_VALUE[5]");
      $output .= generateLink("REX_LINK_ID[2]","REX_VALUE[6]","REX_VALUE[7]","REX_VALUE[8]");    
      $output .= '  </div>'."\n";
    }
    $output .= '</div>'."\n";
  }
  else
  {
    if($REX['REDAXO'])
    {
      echo 'Bitte mindestens eine &Uuml;berschrift eingeben!';
    }
  }
  
  
  
  
  //Output
  print $output;
?>