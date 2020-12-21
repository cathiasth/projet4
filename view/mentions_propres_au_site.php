<?php $title = "Jean ForteRoche - Mentions Propres au Site"; ?>
<? ob_start(); ?>
<?php require('../view/header.php');?>
<div id="sectionMention">
    <h3>Mentions Propres au Site</h3>
    
    <p>Le particulier qui crée un site internet n'est pas obligé de révéler son identité.
      Il doit cependant communiquer à l'hébergeur de son site les éléments qui permettront
      de l'identifier en cas de besoin. Ces éléments d'identification sont couverts par le
      secret professionnel. Mais l'hébergeur du site internet a l'obligation de les dévoiler
      dans le cadre d'une procédure judiciaire.</p><br/>
  
    <p>Si le particulier choisit de garder l'anonymat, les seules mentions obligatoires à 
      retrouver sur son site internet sont : nom, dénomination ou raison sociale et adresse 
      et numéro de téléphone de l'hébergeur de son site internet.</p><br/>
  
    <p>Si le particulier ne souhaite pas garder l'anonymat, il doit indiquer les mentions 
      légales le concernant lui-même et celles de l'hébergeur de son site internet.</p>
</div>
<?php require('../view/footer.php'); ?>
<?php $content = ob_get_clean(); ?>
<?php require('../view/template.php'); ?>
