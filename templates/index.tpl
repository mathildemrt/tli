<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Association des acupunteurs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.css" />
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <link rel="stylesheet" type="text/css" href="css/style_impression.css" media="print" />
      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
      <script type="text/javascript" src="libs/jQuery/jquery-1.12.1.min.js"></script>
      <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" /> 
      <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
  </head>
  {if $template eq 'pathologies.tpl'}
  <body onload="AffichagePatho({$end})">
  {elseif $template eq 'accueil.tpl'}
  <body onload="initialize()">
  {else}
  <body>
  {/if}
    
      {include file="header.tpl"}
      {include file=$template} 
      {include file="footer.tpl"}
      
  </body>
</html>