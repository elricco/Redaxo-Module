<?php
  //Variables
  $output = '';
  
  //Functions
  
  //Output
  if("REX_VALUE[1]" != 0 || "REX_VALUE[2]" != 0)
  {
    //Build box
    $output  = '<div class="sidebar">'."\n";
    //Show Search if selected
    if("REX_VALUE[1]" != 0)
    {
      $output.= '  <div id="searchfield">'."\n";
      $output.= '    <div class="sidebar-searchhead">'."\n";
      $output.= '      Suche'."\n";
      $output.= '    </div>'."\n";
      $output.= '    <form id="rexsearch_form" action="'.rex_getUrl(11).'" method="get">'."\n";
      $output.= '      <div id="rsinput">'."\n";
      $output.= '        <input type="hidden" name="article_id" value="11" />'."\n";
      $output.= '        <input class="rsinput" type="text" name="rexsearch" value="" />'."\n";
      $output.= '      </div>'."\n";
      $output.= '      <div id="rsbutton">'."\n";
      $output.= '        <button class="rsbutton" type="submit">Suchen!</button>'."\n";
      $output.= '      </div>'."\n";
      $output.= '    </form>'."\n";
      $output.= '  </div>'."\n";
    }
    //Show Text if selected
    if("REX_VALUE[2]" != 0)
    {
      if("REX_VALUE[3]" != '')
      {
        $output .= '  <div class="sidebar-head">'."\n";
        $output .= '    REX_VALUE[3]'."\n";
        $output .= '  </div>'."\n";
      }
      $output .= '  <div class="sidebar-text">'."\n";
      $output .= '    REX_HTML_VALUE[4]'."\n";
      $output .= '  </div>'."\n";
    }
    
    $output .= '</div>'."\n";
  }
  
  //Fire output
  print $output;

?>