		<!-- content -->
		<!-- submit form -->
		<section id="submit-form" class="last-section-before-footer">
			<div class="container">
				<h1>Καταχώρηση προσφοράς</h1>
				<form accept-charset="UTF-8" id="submit_form" action="" autocomplete="on" method="POST">
					<div>
						<label for="name">Επωνυμία επιχείρησης:</label>
						<input type="text" name="eponimia_user" value="<?=$_SESSION['user_data']->eponimia_user?>" readonly />
					</div>
					<div>
						<label for="afm">ΑΦΜ:</label>
						<input type="number" name="afm_user" minlength="9" maxlength="9" value="<?=$_SESSION['user_data']->afm_user?>" readonly />
					</div>
					<div>
						<label for="address">Διεύθυνση:</label>
						<input type="text" name="address_user" value="<?=$_SESSION['user_data']->address_user?>" readonly />
					</div>
					<div>
						<label for="submit-location-dropdown">Νομός:</label>
						<select name="nomos_user" class="submit-dropdown">
							<option value="<?=$_SESSION['user_data']->nomos_user?>"><?=$_SESSION['user_data']->nomos_user?></option>
						</select>
					</div>
					<div>
						<label for="submit-municipality-dropdown">Δήμος:</label>
						<select name="dimos_user" class="submit-dropdown">
							<option value="<?=$_SESSION['user_data']->dimos_user?>"><?=$data['dimos']?></option>
						</select>
					</div>
					<div>
						<label for="submit-fuel-type-dropdown">Είδος καυσίμου:</label>
						<select name="id_kausimou" class="submit-dropdown">
							<option value="<?=$_SESSION['user_data']->eidos_kausimou?>"><?=$data['kausimo']?></option>
						</select>
					</div>
					<div>
						<label for="price">Τιμή:</label>
						<input type="number" name="price_prosforas" min="0" step=".01" required />
					</div>
					<div>
						<label for="uptodate">Ημερομηνία λήξης προσφοράς:</label>
						<input type="date" name="ending_date_prosforas" required />
					</div>
					<div>
						<p id="note">* όλα τα πεδία της φόρμας είναι υποχρεωτικά</p>
					</div>
					<button type="submit" value="Submit" class="button">Καταχώρηση</button>
				</form>
			</div>
		</section> <!-- here ends the section 'submit-form' -->