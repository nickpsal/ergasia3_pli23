<!-- content -->
<!-- daily prices -->
<section id="index-daily-prices">
    <div class="container">
        <div class="error">
		    <?php
	    	    if (message()) {
		    	    echo message('', true);
		        }
		    ?>
	    </div>
        <h1>Ημερήσια σύνοψη τιμών</h1>
        <h3><?=get_day_and_date()?></h3>
        <ul>
            <?php for ($i=0; $i<count($data['kausimo']); $i++) : ?>
				<li>
					<h2><?=$data['kausimo'][$i]->tipos_kausimou?></h2>
                    <?php if (!empty($data['min_max'][$i])) : ?>
                        <p id="price-gas95">Μέγιστη: <?=$data['min_max'][$i]->max_price?> / Ελάχιστη: <?=$data['min_max'][$i]->min_price?> / Μέση: <?=number_format($data['avg'][$i]->avg, 2)?></p>
                    <?php else:?>
                        <p id="price-gas95">Μέγιστη: - / Ελάχιστη: - / Μέση: -</p>
                    <?php endif;?>
                </li>
			<?php endfor;?>
		</ul>
	</div>
</section> <!-- here ends the section 'index-daily-prices' -->
<!-- latest announcements -->
<section id="index-latest-announcements" class="last-section-before-footer">
    <div class="container">
	    <h1>Τελευταίες ανακοινώσεις</h1>
        <ul>
            <?php for ($i=0; $i<count($data['anakoinoseis']); $i++) : ?>
                <li>
                    <h3><?=$data['anakoinoseis'][$i]->date_anakoinosis?></h3>
                    <h2><a href="announcements#<?=$data['anakoinoseis'][$i]->date_anakoinosis?>"><?=$data['anakoinoseis'][$i]->title_anakoinosis?></a></h2>
                </li>
            <?php endfor;?>
        </ul>
    </div>
</section> <!-- here ends the section 'index-latest-announcements' -->