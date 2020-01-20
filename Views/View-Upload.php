	<!-- ################################################################# -->
	<!-- ###### VIEW - INFOS A AFFICHER ################################## -->
	<!-- ################################################################# -->

	<form method="POST" action="index.php" id="contactform" enctype="multipart/form-data">

		<div id="forminner">

			<div id="formtitle">

				<h1 class="">Formulaire d'Upload</h1>

			</div>

			<div id="forminputs">

				<div id="inptypetext">

					<div style="margin-top:25px;">

						<input type="file" multiple="multiple" name="fichiers[]" required>

					</div>

					<div style="margin-top:25px;">

						<div><input type="email" name="email_destinataire" required placeholder="Envoyer à (email destinataire)"></div>

					</div>

					<div style="margin-top:25px;">

						<div><input type="email" name="email_expediteur" required placeholder="Votre adresse email"></div>

					</div>

				</div>

				<div style="margin-top:25px;">

					<div><textarea name="message" required placeholder="Message"></textarea></div>

				</div>

				<div style="margin-top:25px;">

					<div id="submit"><input type="submit" value="Envoyer" name="submit" class=""></div>

				</div>

			</div>

		</div>

	</form>