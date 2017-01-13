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
	<p>vitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. Quin in ipso equo, cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis delectemur, montuosis etiam et silvestribus, in quibus diutius.</p>
	<img class="hoverable" src="Ressource/photo.jpg">
</div>
<!--CONTACT-->
<div id="contact" class="col s12">

	<form class="col s12" action="php/contact.php" method="post">
		<h4>Contactez Moi</h4>
		<div class="row">
			<div class="input-field col s6">
				<i class="material-icons prefix">account_circle</i>
				<input name="nom" id="icon_prefix" type="text" class="validate">
				<label for="icon_prefix">Nom</label>
			</div>
			<div class="input-field col s6">
				<i class="material-icons prefix">email</i>
				<input name="mail" id="email" type="email" class="validate">
				<label for="email" data-error="wrong" data-success="right">Email</label>
			</div>
		</div>
		<div>
			<div class="input-field col s6">
				<i class="material-icons prefix">mode_edit</i>
				<textarea name="message" id="icon_prefix2" class="materialize-textarea"></textarea>
				<label for="icon_prefix2">Messages</label>
			</div>
		</div>
		<button class="btn waves-effect waves-light" type="submit" name="action">Submit
			<i class="material-icons right">send</i>
		</button>
	</form>
</div>

<?php include 'include/footer.html';?>
    </body>

</html>