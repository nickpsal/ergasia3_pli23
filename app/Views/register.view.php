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
		                <input type="text" name="Επωνυμία_Χρήστη" required />
		            </div>
		            <div>
		                <label for="afm">ΑΦΜ:</label>
		                <input type="number" name="Αφμ_Χρήστη" id="afm" required />
		            </div>
		            <div>
		                <label for="address">Διεύθυνση:</label>
		                <input type="text" name="Διεύθυνση_Χρήστη" required />
		            </div>
		            <div>
		                <label for="signup-location-dropdown">Νομός:</label>
		                <select name="Νομός_Χρήστη" class="signup-dropdown">
							<?php for ($i=0; $i<count($data['nomoi']); $i++) : ?>
								<option value="<?=$data['nomoi'][$i]->onomasia_nomou?>"><?=$data['nomoi'][$i]->onomasia_nomou?></option>
							<?php endfor;?>		                   
		                </select>
		            </div>
		            <div>
		                <label for="signup-municipality-dropdown">Δήμος:</label>
		                <select name="Δήμος_Χρήστη" class="signup-dropdown">
							<?php for ($i=0; $i<count($data['dimos']); $i++) : ?>
								<option value="<?=$data['dimos'][$i]->name_dimos?>"><?=$data['dimos'][$i]->name_dimos?></option>
							<?php endfor;?>
		                </select>
		            </div>
		            <div>
		                <label for="signup-fuel-type-dropdown">Είδος καυσίμου:</label>
		                <select name="Είδος_Καυσίμου" class="signup-dropdown">
							<?php for ($i=0; $i<count($data['kausima']); $i++) : ?>
								<option value="<?=$data['kausima'][$i]->tipos_kausimou?>"><?=$data['kausima'][$i]->tipos_kausimou?></option>
							<?php endfor;?>
		                </select>
		            </div>
		            <div>
		                <label for="email">email:</label>
		                <input type="email" name="Email_Χρήστη" required />
		            </div>
		            <div>
		                <label for="username">Όνομα χρήστη:</label>
		                <input type="text" name="Username_Χρήστη" required />
		            </div>
		            <div>
		                <label for="password">Κωδικός:</label>
		                <input type="password" id="password" name="Password_Χρήστη" required />
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