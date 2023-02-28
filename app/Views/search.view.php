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
								<label for="filterDropdown1">Νομός:</label>
								<select id="filterDropdown1" name="search-location-dropdown" class="search-dropdown">
									<option value="all">All</option>
									<?php for ($i=0; $i<count($data['nomoi']); $i++) : ?>
										<option value="<?=$data['nomoi'][$i]->onomasia_nomou?>"><?=$data['nomoi'][$i]->onomasia_nomou?></option>
									<?php endfor;?>
								</select>
							</td>
							<td> 
							<label for="filterDropdown2">Τύπος Καυσίμου:</label>
								<select id="filterDropdown2" name="search-fuel-type-dropdown" class="search-dropdown">
									<option value="all">All</option>
									<?php for ($i=0; $i<count($data['kausima']); $i++) : ?>
										<option value="<?=$data['kausima'][$i]->tipos_kausimou?>"><?=$data['kausima'][$i]->tipos_kausimou?></option>
									<?php endfor;?>
								</select>
							</td>
							<td>
								<span id="search-cell"><button class="button" onclick="filterTable()">Αναζήτηση</button></span>
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
				<div class="table-container">
					<table id="search-results" class="minimalistBlack">
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
								<?php
									if ($data['prosfores'][$i]->min === true) {
										echo "<tr class='avg_min'>";
									}else {
										echo "<tr>";
									}
								?>
									<td><?=$count?></td>
									<td><?=$data['user_data'][$i][0]->eponimia_user?></td>
									<td><a href="<?=generate_google_maps_link($data['user_data'][$i][0]->address_user)?>" target="_blank"><?=$data['user_data'][$i][0]->address_user . " , " . $data['user_data'][$i][0]->nomos_user?></a></td>
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
			</div>
		</section> <!-- here ends the section 'search-results' -->