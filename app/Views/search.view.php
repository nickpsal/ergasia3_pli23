		<!-- content -->
		<!-- search filters -->
		<section id="search-filters">
			<div class="container">
				<div class="error">
					<?php
						if (message()) {
							echo message('', true);
						}
					?>
	    		</div>
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
						<?php for ($i=0; $i<count($data['prosfores']); $i++) :?>
							<?php $count = $i + 1?>
							<tr>
								<td><?=$count?></td>
								<td><?=$data['user_data'][$i][0]->eponimia_user?></td>
								<td><a href="<?=generate_google_maps_link($data['user_data'][$i][0]->address_user)?>" target="_blank"><?=$data['user_data'][$i][0]->address_user?></a></td>
								<?php
									for ($j=0; $j<count($data['kausima']); $j++) {
										if ($data['kausima'][$j]->id_kausimou === $data['prosfores'][$i]->id_kausimou) :?>
											<td><?=$data['kausima'][$j]->tipos_kausimou?></td>

										<?php endif;?> <?php
									}
								?>
								<td><?=$data['prosfores'][$i]->price_prosforas?></td>
							</tr>
						<?php endfor;?>
					</tbody>
				</table>
			</div>
		</section> <!-- here ends the section 'search-results' -->