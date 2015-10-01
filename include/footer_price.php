<section class="bgFooter padding-top-min ">
	<div class="container">
		<div class="row">
			<footer>
				<div class="col-sm-6">
					<div class="formularz margin-top-min" class="padding-bottom">
						<form method="post" action="include/main/enrollment.php">
							<div class="col-sm-6">
								<label>Imię i nazwisko</label>
								<input name="name" placeholder="Twoje imię i nazwisko">
							</div>

							<div class="col-sm-6">
								<label>Telefon</label>
								<input name="phone" type="phone" placeholder="Twój telefon">
							</div>

							<div class="col-xs-12">
								<label>Wiadomość</label>
								<textarea name="message" placeholder="Napisz tu wiadomość, jeśli brakuje Ci miejsca pociągij za dolny prawy róg."></textarea>
							</div>

							<div class="col-xs-12">
								<input id="submit" name="submit" type="submit" value="Wyślij">
							</div>
						</form>
					</div>
				</div>




				<div class="col-md-6">
					<address class="margin-top-min">
						<h4 class="text-right margin-bottom">Piotr Nowak Rehabilitacja • Masaż</h4>
						<h5 class="text-right"><a href=""  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-map-marker"></span> Zobacz mape dojazdu</a>

							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title text-center" id="myModalLabel">Dojaz do klienta gratis w danym obszarze</h4>
							      </div>
							      <div class="modal-body">
							         <iframe src="https://www.google.com/maps/d/embed?mid=zy38mB-IGOZo.ka0AXpldAMII" width="640" height="480"></iframe>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>

						<br />
						<br />
						<abbr class="sizeFontFooter" title="Phone"></abbr><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>  +48 502 294 674<br>
						<a class="" href="index.php"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>  www.example.pl</a><br>
						<a href="mailto:#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  biuro@exampel.pl</a>
						</h5>

					</address>	
				</div>
			</footer>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="clearfix margin-bottom">
				<h6 class="pull-left">Created by</h6>
				<h6 class="pull-right"><a target="_blank" href="www.feniksdesign.pl">Feniks Design</a> <a href="https://www.facebook.com/FeniksDesignPoznan?fref=ts" target="_blank"><img class="socialFeniks"src="img/facebook.ico" alt=""></a></h6>
			</div>

		</div>
	</div>
</section>
	</body>
</html>