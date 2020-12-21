<?php $title = "Jean ForteRoche - Mentions relatives à l'utilisation de cookies"; ?>
<? ob_start(); ?>
<?php require('../view/header.php');?>
<div id="sectionMention">
    <h3>Mentions relatives à l'utilisation de cookies</h3>
    
    <p>Un cookie est un petit fichier informatique qui permet d'analyser le 
      comportement des usagers lors de la visite d'un site internet ou de 
      l'utilisation d'un logiciel ou d'une application mobile.</p><br/>

    <p>Les éditeurs de sites ou d'applications qui utilisent des cookies 
      doivent :
      <ul>
         <li>informer les internautes de la finalité des cookies,</li>
         <li>obtenir leur consentement,</li>
         <li>fournir aux internautes un moyen de les refuser.</li>
         <li>La durée de validité du consentement donné dans ce cadre 
        est de 13 mois maximum.</li>
      </ul>
  </p>
</div>
<?php require('../view/footer.php'); ?>
<?php $content = ob_get_clean(); ?>
<?php require('../view/template.php'); ?>
