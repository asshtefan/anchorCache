<!-- start > iOli® Cloud / Moscow, Russia https://ioli.be <! Close -->

<?php
  /* Assign your dynamically generated page to $page */
  $page = "anchorCache.php";
  /* Define path and name of cached file */
  $cachefile = 'anchorCache/' . md5('$page');
 
  /* How long to keep cache file? */
  $cachetime = 1800;
 
  /* Is cache file still fresh? If so, serve it */
 
  if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
  include($cachefile);
  exit;
  }
 
  /* if no file or too old, render and capture HTML page */
  ob_start();
?>

<?php   
 /* Save the cached content to a file */   
 $fp = fopen($cachefile, 'w');    
 fwrite($fp, ob_get_contents());    
 fclose($fp);    
 
 /* Send browser output */   
 ob_end_flush();
?>
