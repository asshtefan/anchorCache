# anchorCache® Caching Class

[ The anchorCache® hehigh-performance object caching system ever. ]

anchorCache® is a high-performance, distributed object caching system, generic in nature, but intended for use in speeding up dynamic web applications by alleviating database load.

anchorCache® dropped the database load to almost nothing, yielding faster page load times for users, better resource utilization. It is simple yet powerful.

https://ioli.be/project/

# Document & API
A Simple anchorCache® PHP Caching Class

From Dec. 01 2015, anchorCache® is available in iOli® Cloud, and it also support more objects type caching.

API Functions are available below.

Requirements for using anchorCache®?
All you need are PHP 5.1+


# How to Install it?

1. Click Download & Unzip

2. Install folder anchorCache/ your server

3. Add the code [ include("anchorCache/anchorCache.php"); ] On all pages!

4. Done!

# PHP Code

<!-- start > iOli® Cloud / Moscow, Russia https://ioli.be <! Close -->

<?php

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
  $cachefile = $cachedir . md5($page) . 'anchorCache/' . $cacheext;
  $cachefile_created = ((@file_exists($cachefile)) and ($ignore_page === false)) ? @filemtime($cachefile) : 0;
  @clearstatcache();
 
  /* Is cache file still fresh? If so, serve it */
 
  if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
  include($cachefile);
  exit;
  }
 
  /* if no file or too old, render and capture HTML page */
  ob_start();
  

<?php
   
 /* Save the cached content to a file */   
 $fp = fopen($cachefile, 'w');    
 fwrite($fp, ob_get_contents());    
 fclose($fp);
 
 /* Send browser output */   
 ob_end_flush();
