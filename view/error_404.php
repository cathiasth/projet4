<?php $title = 'Erreur 404'; 
ob_start();
require("header.php"); 
?>
<div>
  <h2>
    Cette page n'existe plus. Veuillez ressayer avec une autre page.
  </p>
</div>
<?php
require("footer.php");
$content = ob_get_clean();
require("template.php");
?>

