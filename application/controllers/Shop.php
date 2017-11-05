<?php
class Shop extends CI_Controller {

		public function index()
        {
               $data['page_title'] = 'Shop View';
               $this->load->view('pagename', $data);
		       $this->load->view('shopview');
		}
        public function comments()
        {
                echo 'Look at this!';
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