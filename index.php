<?php include "include/header.html";?>
<!--nav-->
<nav class="colorCustom darken-3 nav-extended">
	<div class="nav-wrapper">
		<ul class="tabs tabs-transparent">
			<li class="tab"><a href="#apropos">à propos</a></li>
			<li class="tab"><a href="#contact">Contact</a></li>
		</ul>
	</div>
</nav>

<!--A PROPOS-->
<div id="apropos" class="col s12">
    <h4>Bienvenue sur mon site</h4>
	<p>je suis un jeune graphiste de 20ans<br/>je suis intéressé par le développement web<br/>et curieux des dernieres nouveautés</p>
	<img class="hoverable" src="Ressource/photo.jpg">
</div>
<!--CONTACT-->
<div id="contact" class="col s12">
	<form class="col s12" method="post" action="./php/contact.php">
		<h4>Contactez Moi</h4>
		<a class="grey-text text-lighten-4 right" href="mailto:Quet.Romain@gmail.com">Quet.Romain@gmail.com</a>
<!--		<div class="row">-->
<!--			<div class="input-field col s6">-->
<!--				<i class="material-icons prefix">account_circle</i>-->
<!--				<input name="name" id="icon_prefix" type="text" class="validate">-->
<!--				<label for="icon_prefix">Nom</label>-->
<!--			</div>-->
<!--			<div class="input-field col s6">-->
<!--				<i class="material-icons prefix">email</i>-->
<!--				<input name="email" id="email" type="email" class="validate">-->
<!--				<label for="email" data-error="wrong" data-success="right">Email</label>-->
<!--			</div>-->
<!--		</div>-->
<!--		<div>-->
<!--			<div class="input-field col s6">-->
<!--				<i class="material-icons prefix">mode_edit</i>-->
<!--				<textarea name="msg" id="icon_prefix2" class="materialize-textarea"></textarea>-->
<!--				<label for="icon_prefix2">Messages</label>-->
<!--			</div>-->
<!--		</div>-->
<!--		<button class="btn waves-effect waves-light" type="submit" name="action">Submit-->
<!--			<i class="material-icons right">send</i>-->
<!--		</button>-->
	</form>
</div>

<?php include 'include/footer.html';?>
    </body>

</html>