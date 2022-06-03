<?php 
$homepage = $pages->get('/');
$stories = $pages->findOne("template=stories"); 
$catalogues = $pages->findOne("template=catalogues"); 
$interne = $pages->findOne("template=interne"); 
?>
