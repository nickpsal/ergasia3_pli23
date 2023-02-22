<?php
    class Submit{
        use Controller;
        public function index($data = []){
            $data['title'] = 'Καταχώρηση';
            //get the menu items from database
            $menu = new Menu;
            $data['menu-items'] = $menu->find_all_data_from_db();
            $request = new Request;
            if ($request->is_post()) {
                $prosfores = new Prosfores;
                $search_query['id_user'] = $_SESSION['user_data']->id_user;
                $result = $prosfores->get_first_query_db($search_query);
                if (empty($result)) {
                    $data_to_insert = $_POST;
                    $user = new User;
                    $result2 = $user->get_first_query_db($search_query);
                    $data_to_insert['id_user'] = $result2->id_user;
                    $data_to_insert['date_prosforas'] = get_date();
                    $prosfores->insert_data_to_db($data_to_insert);
                    message('Η Προσφορά καταχωρήθηκε με επιτυχία');
                    redirect('home');
                }else if ($result->price_prosforas > $_POST['price_prosforas']) {
                    $updated_data['price_prosforas'] = $_POST['price_prosforas'];
                    $prosfores->update_data_to_db($result->id_prosforas, $updated_data);
                    message('Υπήρχε ήδη προσφορά καταχωρημένη αλλα με μεγαλύτερη τιμή. Καναμε αντικαταστάση της Παλιάς με την Νέα τιμή');
                    redirect('home');
                }else {
                    message('Η εταιρία έχει ήδη Καταχωρημένη Προσφορά');
                    redirect('home');
                }
            } else if ($request->is_get()) {
                if (!empty($_SESSION['user_data'] && $_SESSION['user_data']->role_user === '2')){
                    message("Ο διαχειρηστής δεν έχει δικαιώματα να κάνει Νέα Καταχώρηση");
                    redirect('home');
                }else if (!empty($_SESSION['user_data']) && $_SESSION['user_data']->role_user === '1'){
                    $this->view('submit', $data); 
                }else {
                    message("Θα πρέπει να κάνετε εγγραφή αν δεν έχετε λογαριασμό ή να συνδεθείτε για να κάνετε Νέα Καταχώρηση");
                    redirect('login');
                }
            }
        }
    }