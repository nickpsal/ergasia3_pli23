<?php
    class Announcements{
        use Controller;
        public function index($data = []){
            $request = new Request;
            $a = new Anakoinoseis;
            if ($request->is_get()) {
                $data['title'] = 'Ανακοινώσεις';
                //get the menu items from database
                $menu = new Menu;
                $data['menu-items'] = $menu->find_all_data_from_db();
                $data['anakoinoseis'] = $a->find_all_data_from_db();
                $this->view('announcements', $data); 
            }
        }

        public function addnew($data = []) {
            $request = new Request;
            if ($request->is_get()) {
                if (empty($_SESSION['user_data'])) {
                    message("Πρέπει να συνδεθείτε σαν διαχειρηστής για να προσθέσετε Νέα Ανακοίνωση");
                    redirect('home');
                }else if (!empty($_SESSION['user_data']) && $_SESSION['user_data']->role_user === '2') {
                    $data['title'] = 'Πρσσθήκη Νέας Ανακοινώσης';
                    $menu = new Menu;
                    $data['menu-items'] = $menu->find_all_data_from_db();
                    $this->view_with_out_header_footer('new_ann', $data); 
                }else if (!empty($_SESSION['user_data']) && $_SESSION['user_data']->role_user === '1') {
                    message("Δεν έχετε δικαιώματα να προσθέσετε Νέα Ανακοίνωση. Επικοινωνήστε με τον διαχειρηστή std080926@ac.eap.gr");
                    redirect('home');
                }
            }else if ($request->is_post()) {
                $a = new Anakoinoseis;
                $data = $_POST;
                $data['date_anakoinosis'] = get_date();
                $a->insert_data_to_db($data);
                message("Προσθέσατε την Ανακοίνωση με Επιτυχία");
                redirect('announcements/complete_success');
            }
        }

        public function complete_success($data = []){
            $request = new Request;
            $a = new Anakoinoseis;
            if ($request->is_get()) {
                $data['title'] = 'Προσθέσατε την Ανακοίνωση με Επιτυχία';
                $this->view_with_out_header_footer('complete_success', $data); 
            }
        }
    }