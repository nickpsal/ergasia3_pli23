var popup = null;
//δηλώνουμε μια σταθερά με το όνομα form που αναφέρεται σε ένα στοιχείο register_form με
//την χρήση της μεθόδου getElementById
const form = document.getElementById("register_form");
if (form != null) {
    // ελέγχουμε αν πατήθηκε το κουμπι submit
    form.addEventListener("submit", (event) => {
        //δηλώνουμε μια σταθερά με το όνομα afmfield που αναφέρεται σε ένα στοιχείο afm με
        //την χρήση της μεθόδου getElementById
        var afmfield = document.getElementById("afm");
        //παίρνουμε την τιμή της afmfield
        var afm = afmfield.value;
        //δηλώνουμε μια σταθερά με το όνομα passwordfield που αναφέρεται σε ένα στοιχείο password με
        //την χρήση της μεθόδου getElementById
        var passwordfield = document.getElementById("password");
        //παίρνουμε την τιμή της password
        var password = passwordfield.value;
        //δηλώνουμε μια σταθερά με το όνομα confirmpasswordfield που αναφέρεται σε ένα στοιχείο passwordconfirm με
        //την χρήση της μεθόδου getElementById
        var confirmpasswordfield = document.getElementById("passwordconfirm");
        //παίρνουμε την τιμή της confirmpasswordfield
        var passwordconfirm = confirmpasswordfield.value;
        //Έλεγχος αν το μηκος του πεδικου ΑΦΜ είναι 9
        if (afm.length !== 9) {
            //αλλάζουμε το χρώμα του background του πεδιου
            afmfield.style.backgroundColor = "red";
            //εμφάνηση μηνύματος αφάλματος
            errorafm.textContent = "Το ΑΦΜ πρέπει να έχει 9 Αριθμούς";
            event.preventDefault();
        } else {
            //αλλάζουμε το χρώμα του background του πεδιου
            afmfield.style.backgroundColor = "white";
            //καθαρισμός μηνύματος αφάλματος
            errorafm.textContent = "";
        }
        if (password !== passwordconfirm) {
            //αλλάζουμε το χρώμα του background του πεδιου
            passwordfield.style.backgroundColor = "red";
            confirmpasswordfield.style.backgroundColor = "red";
            //εμφάνηση μηνύματος αφάλματος
            errorPassword.textContent="Τα πεδίο Κωδικος και Επιβεβαίωση Κωδικου δεν ταιριάζουν";
            event.preventDefault();
        } else {
            //αλλάζουμε το χρώμα του background του πεδιου
            passwordfield.style.backgroundColor = "white";
            confirmpasswordfield.style.backgroundColor = "white";
            //καθαρισμός μηνύματος αφάλματος
            errorPassword.textContent="";
        }
        if (password.length <8) {
            //αλλάζουμε το χρώμα του background του πεδιου
            passwordfield.style.backgroundColor = "red";
            confirmpasswordfield.style.backgroundColor = "red";
            //εμφάνηση μηνύματος αφάλματος
            errorPassword.textContent="Τα πεδίο Κωδικος πρέπει να έχει πάνω απο 8 χαρακτήρες μήκος";
            event.preventDefault();
        }else {
            //αλλάζουμε το χρώμα του background του πεδιου
            passwordfield.style.backgroundColor = "white";
            confirmpasswordfield.style.backgroundColor = "white";
            //καθαρισμός μηνύματος αφάλματος
            errorPassword.textContent="";
        }
        const passwordRegex = /^(?=.*\d)(?=.*[A-Z])[a-zA-Z0-9]{8,}$/;
        if (passwordRegex.test(password)) {
            //αλλάζουμε το χρώμα του background του πεδιου
            passwordfield.style.backgroundColor = "white";
            confirmpasswordfield.style.backgroundColor = "white";
            //καθαρισμός μηνύματος αφάλματος
            errorPassword.textContent="";
        }else {
            //αλλάζουμε το χρώμα του background του πεδιου
            passwordfield.style.backgroundColor = "red";
            confirmpasswordfield.style.backgroundColor = "red";
            //εμφάνηση μηνύματος αφάλματος
            errorPassword.textContent="Τα πεδίο Κωδικος πρέπει να περιέχει τουλάχιστον 1 Κεφαλαίο γράμμα και τουλάχιστον 1 Νούμερο";
            event.preventDefault();
        }
    });
}

function openFormWindow() {
    //μεγεθος παραθυρου
    var width = 640;
    var height = 600;
    //τοποθέτηση παραθύρου στο κέντρο
    var left = (screen.width - width) / 2;
    var top = (screen.height - height) / 2;
    //ανοιγμα popup παραθύρου
    popup = window.open("announcements/addnew", "Προσθήκη Νέας Ανακοίνωσης", "width=" + width + ", height=" + height + ", top=" + top + ", left=" + left );
}


function filterTable() {
    //παίρνουμε το πρώτο πεδιο που επέλεψε ο χρήτης για φιλτράρισμα
    var dropdown1 = document.getElementById("filterDropdown1");
    var filter1 = dropdown1.value;
    //παίρνουμε το δεύτερο πεδιο που επέλεψε ο χρήτης για φιλτράρισμα
    var dropdown2 = document.getElementById("filterDropdown2");
    var filter2 = dropdown2.value;
    //ορίζουμε τον πίνακα table με την χρήση της getElementById
    var table = document.getElementById("search-results");
    //βρίσκουμε όλα τα tr στον πίνακα ππυ πείραμε
    var rows = table.getElementsByTagName("tr");
    for (var i = 1; i < rows.length; i++) {
        //βρίσκουμε όλα τα td στον πίνακα ππυ πείραμε
        var cells = rows[i].getElementsByTagName("td");
        //απο προεπιλογή να μην φαίενται καμια γραμμή
        var visible = false;
        for (var j = 0; j < cells.length; j++) {
            //τσεκάρουμε κάθε γραμμή για τις τιμές των φίλτρων
            var cell = cells[j];
            if (cell) {
                //επιλέγουμε ποια κελία θα ψάχνει για τις τιμές των φίλτρων
                var nomos = cells[2].innerText;
                var kausimo = cells[3].innerText
                //ελεγχουμε αν το filter1 ή το filter2 είναι all ή καποια τιμή. Αν ειναι all φαινοτναι ολα αν ειναι καποια
                //αλλη τιμη ελεγχουμε αν το συγκεκριμενο field περιεχεται στο filter2 ή στο filter2.
                if ((filter1 === "all" || nomos.includes(filter1)) && (filter2 === "all" || kausimo.includes(filter2))) {
                    visible = true;
                    break;
                }
            }
        }
        if (visible) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }
}

function closeFormWindow() {
    //κλείσιμο παραθύρου popup
    window.close();
    //ανανέωση της σελίδας με τις ανακοινώσεις
    window.opener.location.reload();
}