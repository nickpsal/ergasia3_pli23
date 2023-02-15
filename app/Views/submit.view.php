		<!-- content -->
		<!-- submit form -->
		<section id="submit-form" class="last-section-before-footer">
			<div class="container">
				<h1>Καταχώρηση προσφοράς</h1>
				<form accept-charset="UTF-8" action="login.php" autocomplete="on" method="POST">
					<div>
						<label for="name">Επωνυμία επιχείρησης:</label>
						<input type="text" name="name" value="EKO - Auto Gas" readonly />
					</div>
					<div>
						<label for="afm">ΑΦΜ:</label>
						<input type="number" name="afm" minlength="9" maxlength="9" readonly />
					</div>
					<div>
						<label for="address">Διεύθυνση:</label>
						<input type="text" name="address" readonly />
					</div>
					<div>
						<label for="submit-location-dropdown">Νομός:</label>
						<select name="submit-location-dropdown" class="submit-dropdown">
							<?php for ($i=0; $i<count($data['nomoi']); $i++) : ?>
								<option value="<?=$data['nomoi'][$i]->onomasia_nomou?>"><?=$data['nomoi'][$i]->onomasia_nomou?></option>
							<?php endfor;?>
						</select>
					</div>
					<div>
						<label for="submit-municipality-dropdown">Δήμος:</label>
						<select name="submit-municipality-dropdown" class="submit-dropdown">
							<?php for ($i=0; $i<count($data['dimos']); $i++) : ?>
								<option value="<?=$data['dimos'][$i]->name_dimos?>"><?=$data['dimos'][$i]->name_dimos?></option>
							<?php endfor;?>
						</select>
					</div>
					<div>
						<label for="submit-fuel-type-dropdown">Είδος καυσίμου:</label>
						<select name="submit-fuel-type-dropdown" class="submit-dropdown">
							<?php for ($i=0; $i<count($data['kausima']); $i++) : ?>
								<option value="<?=$data['kausima'][$i]->id_kausimou ?>"><?=$data['kausima'][$i]->tipos_kausimou?></option>
							<?php endfor;?>
						</select>
					</div>
					<div>
						<label for="price">Τιμή:</label>
						<input type="number" name="price" min="0" step=".01" required />
					</div>
					<div>
						<label for="uptodate">Ημερομηνία λήξης προσφοράς:</label>
						<input type="date" name="uptodate" required />
					</div>
					<div>
						<p id="note">* όλα τα πεδία της φόρμας είναι υποχρεωτικά</p>
					</div>
					<button type="submit" value="Submit" class="button">Καταχώρηση</button>
				</form>
			</div>
		</section> <!-- here ends the section 'submit-form' -->