<?php $path = $_SERVER['PHP_SELF']; 
$file = basename ($path);
// echo"$file"; // index.php ?>

<!-- START :: Menu  -->
<div class="fat-nav">
  <div class="fat-nav__wrapper">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="index.php#lequipe">L'équipe</a></li>
        <li><a href="hairspa.html">Hair SPA</a></li>
        <li><a href="coupecouleur.html">Coupe et couleur</a></li>
	      <li><a href="massage.html">Massage</a></li>
	    	<li><a href="maquillage.html">Maquillage</a></li>
		    <li><a href="index.php#produits">Produits</a></li>
		    <li><a href="http://blog.lesalondangelique.com">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
</div>

<!-- END :: Menu  -->

<!-- START :: scripts -->
<div class="jquery-script-ads" align="center">
</div>
<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script> 
<script src="dist/jquery.fatNav.js"></script> 
<script>
	(function() {
			$.fatNav();
	}());
</script>
<!-- END :: scripts  -->
