<?php
    //εκτύπωση λίστας διαμορφωμένη με pre
    function show($stuff)
    {
        echo "<pre>";
        print_r($stuff);
        echo "</pre>";
    }

    //function ανακαυευθηνσης
    function redirect($page) {
        header("Location: " . URL . $page . '/');
        die();
    }

    //έλεχγος αν ο controlelr που δίνουμε είναι η τρέχουσα σελίδα
    function check_if_current_page($m) {
        $current_page = basename($_SERVER['REQUEST_URI']);
        if ($current_page == $m) {
            return true;
        }
        return false;
    }

    //εμφάνιση μηνύματος μονο μια φορα
    function message($msg = '',$erase = false){
        if(!empty($msg)){
            $_SESSION['message'] = $msg;
        }else if(!empty($_SESSION['message'])){
            $msg = $_SESSION['message'];
            if($erase){
                unset($_SESSION['message']);
            }
            return $msg;
        }
        return false;
    }

    //Εκτύπωση τρέχουσας ημέρας στα ελληνικα και τρέχουσας ημερομηνίας
    function get_day_and_date(){
        $english_days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        $greek_days = array('Κυριακή', 'Δευτέρα', 'Τρίτη', 'Τεττάρτη', 'Πέμπτη', 'Παρασκευή', 'Σάββατο');
        $current_day = str_replace($english_days, $greek_days, date('l'));
        return $current_day . ", " . date("d/m/Y");
    }

    //Εκτπωση τρέχουσας ημερομηνίας σε formar Χρονολογία/Μήνας/Ημέρα
    function get_date() {
        return date("Y/m/d");
    }

    //Δημιουργία google maps link
    function generate_google_maps_link($address) {
        $utf8_address = mb_convert_encoding($address, 'UTF-8', 'auto');
        $google_maps_link = "https://www.google.com/maps?q=" . urlencode($utf8_address);
        return $google_maps_link;
    }