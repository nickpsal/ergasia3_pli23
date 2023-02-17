		<!-- content -->
		<!-- signup form -->
		<section id="signup-form" class="last-section-before-footer">
		    <div class="container">
		        <h1>Εγγραφή επιχείρησης</h1>
		        <form accept-charset="UTF-8" action="" autocomplete="on" method="POST">
					<div class="error">
						<div id="errorafm"></div>
						<div id="errorPassword"></div>
					</div>
		            <div>
		                <label for="name">Επωνυμία επιχείρησης:</label>
		                <input type="text" name="eponimia_user" required />
		            </div>
		            <div>
		                <label for="afm">ΑΦΜ:</label>
		                <input type="number" name="afm_user" id="afm" required />
		            </div>
		            <div>
		                <label for="address">Διεύθυνση:</label>
		                <input type="text" name="address_user" required />
		            </div>
		            <div>
		                <label for="signup-location-dropdown">Νομός:</label>
		                <select name="dimos_user" class="signup-dropdown">
							<?php for ($i=0; $i<count($data['nomoi']); $i++) : ?>
								<option value="<?=$data['nomoi'][$i]->onomasia_nomou?>"><?=$data['nomoi'][$i]->onomasia_nomou?></option>
							<?php endfor;?>		                   
		                </select>
		            </div>
		            <div>
		                <label for="signup-municipality-dropdown">Δήμος:</label>
		                <select name="nomos_user" class="signup-dropdown">
							<?php for ($i=0; $i<count($data['dimos']); $i++) : ?>
								<option value="<?=$data['dimos'][$i]->name_dimos?>"><?=$data['dimos'][$i]->name_dimos?></option>
							<?php endfor;?>
		                </select>
		            </div>
		            <div>
		                <label for="signup-fuel-type-dropdown">Είδος καυσίμου:</label>
		                <select name="eidos_kausimou" class="signup-dropdown">
							<?php for ($i=0; $i<count($data['kausima']); $i++) : ?>
								<option value="<?=$data['kausima'][$i]->tipos_kausimou?>"><?=$data['kausima'][$i]->tipos_kausimou?></option>
							<?php endfor;?>
		                </select>
		            </div>
		            <div>
		                <label for="email">email:</label>
		                <input type="email" name="email_user" required />
		            </div>
		            <div>
		                <label for="username">Όνομα χρήστη:</label>
		                <input type="text" name="username_user" required />
		            </div>
		            <div>
		                <label for="password">Κωδικός:</label>
		                <input type="password" id="password" name="password_user" required />
		            </div>
		            <div>
		                <label for="confirm-password">Επιβεβαίωση κωδικού:</label>
		                <input type="password" id="passwordconfirm" name="confirm-password" required />
		            </div>
		            <div>
		                <p id="note">* όλα τα πεδία της φόρμας είναι υποχρεωτικά</p>
		            </div>
		            <button type="submit" value="Submit" class="button">Εγγραφή</button>
		        </form>
		    </div>
		</section> <!-- here ends the section 'signup-form' -->