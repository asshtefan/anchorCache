<!-- start > iOli® Cloud / Moscow, Russia https://ioli.be <! Close -->

<?php
$cachedir="anchorCache";
  /* Assign your dynamically generated page to $page */
  $page = "anchorCache.php";
  
  /*Extension to give cached files (usually cache, htm, txt) */
  $cacheext = 'html';
  
  /* Define path and name of cached file */
  $cachefile = 'anchorCache/' . md5('$page');
 
  /* How long to keep cache file? */
  $cachetime = 1800;
  
  
  /* Ignore List */
  $ignore_list = array(
  '/info.php',
  '/project/'
  );
  
  /* Script */
  /* Requested page */
  $page = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  
  /* Cache file to either load or create */
  $cachefile = $cachedir.'/cache/'.  md5($page) . '.' . $cacheext;
  $cachefile_created = ((@file_exists($cachefile)) and ($ignore_page === false)) ? @filemtime($cachefile) : 0;
  @clearstatcache();
 
  /* Is cache file still fresh? If so, serve it */
 
  if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
  include($cachefile);
  exit;
  }
 
  /* if no file or too old, render and capture HTML page */
  ob_start();
?>

JTNDJTNGcGhwJTBBJTIwJTIwJTIwJTBBJTIwLyolMjBTYXZlJTIwdGhlJTIwY2FjaGVkJTIwY29udGVudCUyMHRvJTIwYSUyMGZpbGUlMjAqLyUyMCUyMCUyMCUwQSUyMCUyNGZwJTIwJTNEJTIwZm9wZW4lMjglMjRjYWNoZWZpbGUlMkMlMjAlMjd3JTI3JTI5JTNCJTIwJTIwJTIwJTIwJTBBJTIwZndyaXRlJTI4JTI0ZnAlMkMlMjBvYl9nZXRfY29udGVudHMlMjglMjklMjklM0IlMjAlMjAlMjAlMjAlMEElMjBmY2xvc2UlMjglMjRmcCUyOSUzQiUwQSUyMCUwQSUyMC8qJTIwU2VuZCUyMGJyb3dzZXIlMjBvdXRwdXQlMjAqLyUyMCUyMCUyMCUwQSUyMG9iX2VuZF9mbHVzaCUyOCUyOSUzQiUwQSUzRiUzRQ==
