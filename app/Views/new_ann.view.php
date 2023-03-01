<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title><?=$data['title']?> - <?=APP_NAME?></title>
		<link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/style.css">
	</head>
	<body>
		<!-- content -->
		<!-- signup form -->
		<section id="signup-form" class="last-section-before-footer">
		    <div class="container">
		        <h1>Προσθήκη Νέας Ανακοίνωσης</h1>
		        <form accept-charset="UTF-8" action="" autocomplete="on" method="POST">
					<div class="error">
						<div id="errorafm"></div>
						<div id="errorPassword"></div>
						<?php
							if (message()) {
								echo message('', true);
							}
						?>
					</div>
		            <div>
		                <label for="name">Τίτλος Ανακοίνωσης</label>
		                <input type="text" name="title_anakoinosis" required />
		            </div>
		            <div>
		                <label for="address">Κείμενο Ανακοίνωσης</label>
						<textarea rows="6" cols="50" name="text_anakoinosis" required></textarea>
		            </div>
		            <div>
		                <p id="note">* όλα τα πεδία της φόρμας είναι υποχρεωτικά</p>
		            </div>
		            <button id="submit" type="submit" value="Submit" class="button">Υποβολή Νέας Ανακοίνωσης</button>
		        </form>
		    </div>
		</section> <!-- here ends the section 'signup-form' -->