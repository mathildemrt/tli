<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Association des acupunteurs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/style_inscription.css">
      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
      <script type="text/javascript" src="js/script.js"></script>
  </head>
  {if $template eq 'pathologies.tpl'}
  <body onload="AffichagePatho({$end})">
  {else}
  <body>
  {/if}
      
      {include file="header.tpl"} 
      {include file=$template} 
      {include file="footer.tpl"}
      
  </body>
</html>

