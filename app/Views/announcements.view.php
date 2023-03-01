<!-- content -->
		<!-- announcements -->
		<section id="announcements" class="last-section-before-footer">
			<div class="container">
				<?php if (!empty($_SESSION['user_data']) && $_SESSION['user_data']->role_user === '2') :?>
					<div class="add-button">
						<button class="button" onclick="openFormWindow()">Προσθήκη Ανακοίνωσης</button>
					</div>
				<?php endif;?>
				<h1>Ανακοινώσεις</h1>
				<div id="announcements-list">
					<ul>
						<?php for ($i=0; $i<count($data['anakoinoseis']); $i++) : ?>
							<?php if (!empty($_SESSION['user_data']) && $_SESSION['user_data']->role_user === '2') :?>
								<div class="del-button">
									<button class="button" onclick="">Διαγραφή</button>
								</div>
							<?php endif;?>
							<li>
								<h3 id="announcement1date"><?=$data['anakoinoseis'][$i]->date_anakoinosis?></h3>
								<h2 id="announcement1title"><?=$data['anakoinoseis'][$i]->title_anakoinosis?></h2>
								<p>
									<?=$data['anakoinoseis'][$i]->text_anakoinosis?>
								</p>
							</li>
						<?php endfor;?>
					</ul>
				</div>
			</div>
		</section>    <!-- here ends the section 'announcements' -->