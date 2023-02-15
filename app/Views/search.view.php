		<!-- content -->
		<!-- search filters -->
		<section id="search-filters">
			<div class="container">
				<h1>Φίλτρα</h1>
				<table id="search-filters-table">
					<tbody>
						<tr>
							<td>
								<label for="search-location-dropdown">Νομός:</label>
								<select name="search-location-dropdown" class="search-dropdown">
									<?php for ($i=0; $i<count($data['nomoi']); $i++) : ?>
										<option value="<?=$data['nomoi'][$i]->onomasia_nomou?>"><?=$data['nomoi'][$i]->onomasia_nomou?></option>
									<?php endfor;?>
								</select>
							</td>
							<td> 
							<label for="search-fuel-type-dropdown">Είδος καυσίμου:</label>
								<select name="search-fuel-type-dropdown" class="search-dropdown">
									<?php for ($i=0; $i<count($data['kausima']); $i++) : ?>
										<option value="<?=$data['kausima'][$i]->id_kausimou?>"><?=$data['kausima'][$i]->tipos_kausimou?></option>
									<?php endfor;?>
								</select>
							</td>
							<td>
								<span id="search-cell"><a class="button" href="">Αναζήτηση</a></span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section> <!-- here ends the section 'search-filters' -->


		<!-- search results -->
		<section id="search-results" class="last-section-before-footer">
			<div class="container">
				<h1>Αποτελέσματα</h1>

				<table id="search-results-table" class="minimalistBlack">
					<thead>
						<tr>
							<th>α/α</th>
							<th>Επωνυμία</th>
							<th>Διεύθυνση</th>
							<th>Τύπος καυσίμου</th>
							<th>Τιμή</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>BP</td>
							<td><a href="https://www.google.com/maps/place/BP/@38.3482182,21.7188751,17z/data=!3m1!4b1!4m6!3m5!1s0x135e52bdf70f3c5f:0x22237c0d361f07da!8m2!3d38.3482182!4d21.7188751!16s%2Fg%2F11b75f85_2" target="_blank">ΕΟ Ρίου Αγρινίου, Αντίρριο 300 20</a></td>
							<td>Αμόλυβδη βενζίνη 95</td>
							<td>1.91</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Aegean oil</td>
							<td><a href="https://www.google.com/maps/place/Aegean+oil/@38.3644685,21.5621702,17z/data=!3m1!4b1!4m6!3m5!1s0x135e432309b58cf9:0x5cbdd7b8946eddd9!8m2!3d38.3644685!4d21.5621702!16s%2Fg%2F1262jgj8l" target="_blank">Επαρ, Επαρ.Οδ. Κρυονερίου - Γέφυρας Ευήνου, Γαλατάς 300 14</a></td>
							<td>Αμόλυβδη βενζίνη 95</td>
							<td>1.93</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Avin</td>
							<td><a href="https://www.google.com/maps/place/Avin/@38.3395962,21.7360684,17z/data=!3m1!4b1!4m6!3m5!1s0x135e4e962ff15d77:0x6e69c8955afe49ff!8m2!3d38.3395983!4d21.73607!16s%2Fg%2F12jlxxsml" target="_blank">3ο ΧΛΜ. Ε.Ο. ΑΝΤΙΡΙΟΥ-ΙΩΑΝΝΙΝΩΝ, Αντίρριο 300 20</a></td>
							<td>Αμόλυβδη βενζίνη 95</td>
							<td>1.93</td>
						</tr>
						<tr>
							<td>4</td>
							<td>BP - Μαντζουκη Αφοι Ε.Ε.</td>
							<td><a href="https://www.google.com/maps/place/BP+-+Μαντζουκη+Αφοι+Ε.Ε./@38.3385797,21.7480623,17z/data=!3m1!4b1!4m6!3m5!1s0x135e4e97986df32f:0x292bcae83705dedd!8m2!3d38.3385797!4d21.7480623!16s%2Fg%2F11d_tq34sx" target="_blank">Χλμ Ε.Ο. Αντιρριου-Ιωαννινων 2Ο, Αντίρριο 300 20</a></td>
							<td>Αμόλυβδη βενζίνη 95</td>
							<td>1.94</td>
						</tr>
						<tr>
							<td>5</td>
							<td>Π. Κωσταρας & Σια Ε.Ε</td>
							<td><a href="https://www.google.com/maps/place/Π.+Κωσταρας+%26+Σια+Ε.Ε/@38.3387465,21.7493428,17z/data=!3m1!4b1!4m6!3m5!1s0x135e4e978121ca35:0x9e85fd449ce04e1a!8m2!3d38.3387465!4d21.7493428!16s%2Fg%2F11g9dlms_x" target="_blank">Χλμ Αντιρριου-Ιωαννινων 2Ο, Αντίρριο 300 20</a></td>
							<td>Αμόλυβδη βενζίνη 95</td>
							<td>1.96</td>
						</tr>
						<tr>
							<td>6</td>
							<td>EKO</td>
							<td><a href="https://www.google.com/maps/place/EKO/@38.33767,21.7458,17z/data=!3m1!4b1!4m6!3m5!1s0x135e4e96257ccf61:0x77d9cb9cea29904!8m2!3d38.33767!4d21.7458!16s%2Fg%2F11d_tpfx3q" target="_blank">Χλμ Ε.Ο Αντιρριου-Αγρινιου 3Ο, Θεση Στερφοτοπι 300 20</a></td>
							<td>Αμόλυβδη βενζίνη 95</td>
							<td>1.97</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section> <!-- here ends the section 'search-results' -->