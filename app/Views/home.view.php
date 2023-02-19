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
        <h3><?=get_date()?></h3>
        <ul>
            <li>
                <h2>Τιμή αμόλυβδης βενζίνης 95</h2>
                <p id="price-gas95">Μέγιστη: 2.11 / Ελάχιστη: 1.89 / Μέση: 2.03</p>
            </li>
            <li>
                <h2>Τιμή πετρελαίου κίνησης</h2>
		        <p id="price-oil1">Μέγιστη: 1.94 / Ελάχιστη: 1.79 / Μέση: 1.81</p>
		    </li>
		    <li>
		        <h2>Τιμή πετρελαίου θέρμανσης</h2>
		        <p id="price-oil2">Μέγιστη: 1.49 / Ελάχιστη: 1.219 / Μέση: 1.36</p>
		    </li>
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
                    <h3><?=$data['anakoinoseis'][$i]->data_anakoinosis?></h3>
                    <h2><a href="announcements#<?=$data['anakoinoseis'][$i]->data_anakoinosis?>"><?=$data['anakoinoseis'][$i]->title_anakoinosis?></a></h2>
                </li>
            <?php endfor;?>
        </ul>
    </div>
</section> <!-- here ends the section 'index-latest-announcements' -->