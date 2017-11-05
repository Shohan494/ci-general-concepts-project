<?php
class Shop extends CI_Controller {

		public function index()
        {
               $data['page_title'] = 'Shop View';
               $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

               $this->load->view('pagename', $data);
               // also possible as --- $this->load->view('directory_name/file_name');
		       $this->load->view('shopview', $data);
		}
        public function about()
        {
               $data['page_title'] = 'About View';
               $data['string'] = $this->load->view('pagename', $data, TRUE);

               $this->load->view('pagename', $data);
               $this->load->view('about', $data);
        }
        public function itemwithid1($item)
        {
        		echo "single argument";
                echo $item;
        }
        public function itemwithid2($item, $id)
        {
        		echo "multiple argument";
                echo $item;
                echo $id;
        }
}