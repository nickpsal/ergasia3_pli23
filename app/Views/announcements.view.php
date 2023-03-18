<!-- content -->
		<!-- announcements -->
		<section id="announcements" class="last-section-before-footer">
			<div class="container">
				<div class="error">
					<?php
						if (message()) {
							echo message('', true);
						}
					?>
	    		</div>
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
									<a class="btn" href="<?=URL?>announcements/delann/<?=$data['anakoinoseis'][$i]->id_anakoinosis?>"><i class="fa-sharp fa-solid fa-trash fa-2x"></i></a>		
								</div>
							<?php endif;?>
							<li>
								<h3 id="<?=$data['anakoinoseis'][$i]->date_anakoinosis?>"><?=$data['anakoinoseis'][$i]->date_anakoinosis?></h3>
								<h2 id="<?=$data['anakoinoseis'][$i]->title_anakoinosis?>"><?=$data['anakoinoseis'][$i]->title_anakoinosis?></h2>
								<p>
									<?=$data['anakoinoseis'][$i]->text_anakoinosis?>
								</p>
							</li>
						<?php endfor;?>
					</ul>
				</div>
			</div>
		</section>    <!-- here ends the section 'announcements' -->