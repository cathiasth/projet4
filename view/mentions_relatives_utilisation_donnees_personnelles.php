<?php $title = "Jean ForteRoche - Mentions relatives à l'utilisation de données personnelles"; ?>
<? ob_start(); ?>
<?php require('../view/header.php');?>
<div id="sectionMention">
    <h3>Mentions relatives à l'utilisation de données personnelles</h3>
    
    <p>Les sites qui utilisent des données personnelles doivent obligatoires mentionner les informations suivantes :
        <ul>
            <li>Coordonnées du délégué à la protection des données (DPO ou DPD) de l'organisme, s'il a été désigné, 
              ou d'un point de contact sur les questions de protection des données personnelles</li>
            <li>Finalité poursuivie par le traitement auquel les données sont destinées</li>
            <li>Caractère obligatoire ou facultatif des réponses et conséquences éventuelles à l'égard de 
              l'internaute d'un défaut de réponse</li>
            <li>Destinataires ou catégories de destinataires des données</li>
            <li>Droits d'opposition, d'interrogation, d'accès et de rectification</li>
            <li>Au besoin, transferts de données à caractère personnel envisagés à destination d'un État 
              n'appartenant pas à l'Union européenne</li>
            <li>Base juridique du traitement de données (c'est-à-dire ce qui autorise légalement le traitement : il 
              peut s'agir du consentement des personnes concernées, du respect d'une obligation prévue par un texte,
              de l'exécution d'un contrat notamment)</li>
            <li>Droit d'introduire une réclamation auprès de la Cnil</li>
        </ul>
     </p>
</div>
<?php require('../view/footer.php'); ?>
<?php $content = ob_get_clean(); ?>
<?php require('../view/template.php'); ?>
