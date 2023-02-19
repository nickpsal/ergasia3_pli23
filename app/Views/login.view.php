<!-- content -->
<!-- login form -->
<section id="login-form" class="last-section-before-footer">
    <div class="container">
        <h1>Είσοδος χρήστη</h1>
        <form accept-charset="UTF-8" action="" autocomplete="on" method="POST">
            <div class="error">
                <?php
                    if (message()) {
                        echo message('', true);
                    }
                ?>
			</div>
            <div>
                <label for="username">Όνομα χρήστη:</label>
                <input type="text" name="username_user" value="" placeholder="Εισάγετε username" required />
            </div>
            <div>
                <label for="password">Κωδικός:</label>
                <input type="password" name="password_user" placeholder="Εισάγετε password" required />
            </div>
            <div>
                <button type="submit" value="Submit" class="button">Είσοδος</button>
            </div>
        </form>

        <div id="signup-link"><a href="<?=URL?>register">Εγγραφή νέας επιχείρησης</a></div>
    </div>
</section> <!-- here ends the section 'login-form' -->