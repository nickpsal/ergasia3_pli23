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
                <div class="error">
                <?php
                    if (message()) {
                        echo message('', true);
                    }
                ?>
                </div>
		        <h1>Μπορείτε να κλείστε το Παράθυρο</h1>
		        <button class="button" onclick="closeFormWindow()">CLOSE</button>
		    </div>
		</section> 
        <script src="<?=ROOT?>/assets/js/scripts.js"></script>
<!-- footer - terms of use, privacy policy -->
<footer id="main-footer">
		</footer>
	</body>
</html>