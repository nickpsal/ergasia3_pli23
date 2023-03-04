# pli23_ergasia_3
# 3η Εργασία ΠΛΗ23
Το project αυτο δημιουργήθηκε στα πλαίσια της 3ης Εργασίας της ενότητάς ΠΛΗ23 για το Ελληνικό Ανοιχτό Πανεπιστήμιο ΕΑΠ 
# Σύντομες Οδηγίες Εγκατάστασης

# 1) Βάση Δεδομένων  

  1.1. Δημιουργούμε Βάση με τα ακόλουθα στοιχεία)
  --------------------------------------------------------
      όνομα : psaltakis_nikolaos_ge3_db
      χρήστης: 	root
      κωδικός: 	toor

      ή

      αλλαζουμε τα ανωτέρω στοιχεια με τα δικά μας στο αρχειο  ../app/core/config.php
      ----------------------------------------------------
      define('DB_HOST', 'localhost');
      define('DB_USER', 'root');
      define('DB_PASS', 'toor');
      define('DB_NAME', 'psaltakis_nikolaos_ge3_db');

      (το οποίο πρέπει να είναι σε μη προσβασιμο απο το WEB φάκελο)
      Αν το root path για το αρχειο που διαβαζετε ειναι C:\wamp64\folder το config.php θα πρέπει να είναι 
      C:\wamp64\folder\app\core\config.php


  1.2 Εισαγωγή ΔΕδομένων
  --------------------------------------------------------
      Εισάγουμε τα δεδομένα της εφαρμογής στην Βάση που δημιουργήσαμε (phpmyadmin import)
      επιλέγοντας το αρχείο ./public/psaltakis_nikolaos_ge3_db


# 2.Στοιχεία Λογαριασμών Χρηστών (Dummy) για είσοδο χρησιμοποιούμε τα username και password 
που αναφέρονται παρακάτω.

Διαχειρηστής
username: std0δ80926
password : User080926

BP Τάυρος
ΑΦΜ : 888888881
Διευθηνση : Λεωφόρος Πειραιώς 240, Ταύρος, 17778, ΑΤΤΙΚΗΣ
email : bp_tavros@gmail.com
username : bp_tavros
password : User123456

Shell Ταύρος
ΑΦΜ : 888888882
Διευθηνση : Πειραιώς 187, Ταύρος Αττικής 177 78
email : shell_tauros@gmail.com
usernbame : shell_tavros
password : User123456

REVOIL Ταύρος
ΑΦΜ : 888888883
Διευθυνση : Λεωφόρος Πειραιώς 198, Ταύρος, 17778, ΑΤΤΙΚΗΣ
email : revoil_tavros@gmail.com
username : revoil_tavros
password : User123456

AVIN Χαλκίδα
ΑΦΜ : 888888884
Διευθηνση : Ορέστη Μακρή 7, Χαλκίδα 34100, ΧΑΛΚΙΔΑ
email : avin_xalkida@gmail.com
username : avin_xalkida
password : User123456

Shell Πάτρας
ΑΦΜ : 888888885
Διευθηνση : Ν.Ε.Ο. Πατρών - Αθηνών 18, 264 41, Πάτρα
email : shell_patras@gmail.com
username : shell_patras
password : User123456

Avin Πατρας
ΑΦΜ : 888888886
Διεύθηνση : Αμερικής 44, 26442, ΑΧΑΪΑΣ
email : avin_patras@gmail.com
username : avin_patras
password : User123456

ETEKA Πάτρας
ΑΦΜ : 888888887 
Διευθηνση : Γλαύκου 58, 26500, Πάτρα
email : eteka_patras@gmail.com
username : eteka_patras
password : User123456

SHELL - ΕΡΜΗΣ ΑΕΜΕΕ
ΑΦΜ : 888888888
Διευθηνση : Ακτή Δυμαίων 108, Πάτρα, 26333, ΑΧΑΪΑΣ
email : shell_ermis@gmail.com
username : shell_ermis
password : User123456


AVIN - ΠΡΑΤΗΡΙΑ ΥΓΡΩΝ ΚΑΥΣΙΜΩΝ ΣΤΑΪΚΟΣ ΓΕΩΡΓΙΟΣ ΜΟΝΟΠΡΟΣΩΠΗ ΙΚΕ
ΑΦΜ : 888888889
Διευθηνση : Αμερικής 44, Πάτρα - Αγυιά, 26441, ΑΧΑΪΑΣ
email : avin_staikos@gmail.com
username : avin_staikos
password : User123456

ΕΤΕΚΑ (Λιβάνης Αντώνιος Β.)
ΑΦΜ : 888888890
Διευθηνση : Οδυσσέα Ελύτη 12, Πάτρα 263 33 ΟΚ
email : eteka_staikos@gmail.com
username : eteka_staikos_konstantinos
password : User123456
