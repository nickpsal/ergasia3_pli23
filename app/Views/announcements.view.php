<!-- content -->
		<!-- announcements -->
		<section id="announcements" class="last-section-before-footer">
			<div class="container">
				<h1>Ανακοινώσεις</h1>

				<div id="announcements-list">
					<ul>
						<?php for ($i=0; $i<count($data['anakoinoseis']); $i++) : ?>
							<li>
								<h3 id="announcement1date"><?=$data['anakoinoseis'][$i]->Ημερομηνία_Καταχώρησης?></h3>
								<h2 id="announcement1title"><?=$data['anakoinoseis'][$i]->Τίτλος_Ανακοίνωσης?></h2>
								<p>
									<?=$data['anakoinoseis'][$i]->Κείμενο_Ανακοίνωσης?>
								</p>
							</li>
						<?php endfor;?>
					</ul>
				</div>
			</div>
		</section>    <!-- here ends the section 'announcements' -->