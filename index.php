<?php

require __DIR__.'/lib/base.php';

F3::set('CACHE',FALSE);
F3::set('DEBUG',3);
F3::set('UI','./');

F3::route('GET /@page', 'show');
F3::route('GET /', 'show');

function show(){
  $page = F3::get('PARAMS["page"]') ? F3::get('PARAMS["page"]') : 'index';
  echo Template::serve($page.'.html');
}

F3::run();

?>
