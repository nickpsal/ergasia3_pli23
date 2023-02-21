		<!-- content -->
		<!-- submit form -->
		<section id="submit-form" class="last-section-before-footer">
			<div class="container">
				<h1>Καταχώρηση προσφοράς</h1>
				<form accept-charset="UTF-8" action="login.php" autocomplete="on" method="POST">
					<div>
						<label for="name">Επωνυμία επιχείρησης:</label>
						<input type="text" name="name" value="<?=$_SESSION['user_data']->eponimia_user?>" readonly />
					</div>
					<div>
						<label for="afm">ΑΦΜ:</label>
						<input type="number" name="afm" minlength="9" maxlength="9" value="<?=$_SESSION['user_data']->afm_user?>" readonly />
					</div>
					<div>
						<label for="address">Διεύθυνση:</label>
						<input type="text" name="address" value="<?=$_SESSION['user_data']->address_user?>" readonly />
					</div>
					<div>
						<label for="submit-location-dropdown">Νομός:</label>
						<select name="submit-location-dropdown" class="submit-dropdown">
							<option value="<?=$_SESSION['user_data']->address_user?>"><?=$_SESSION['user_data']->nomos_user?></option>
						</select>
					</div>
					<div>
						<label for="submit-municipality-dropdown">Δήμος:</label>
						<select name="submit-municipality-dropdown" class="submit-dropdown">
							<option value="<?=$_SESSION['user_data']->dimos_user?>"><?=$_SESSION['user_data']->dimos_user?></option>
						</select>
					</div>
					<div>
						<label for="submit-fuel-type-dropdown">Είδος καυσίμου:</label>
						<select name="submit-fuel-type-dropdown" class="submit-dropdown">
							<option value="<?=$_SESSION['user_data']->eidos_kausimou?>"><?=$_SESSION['user_data']->eidos_kausimou?></option>
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