<?php $title = 'Erreur 500'; 
ob_start();
require("header.php"); 
?>
<div>
  <h2>
    Problème de serveur. Veuillez ressayer.
  </p>
</div>
<?php
require("footer.php");
$content = ob_get_clean();
require("template.php");
?>

