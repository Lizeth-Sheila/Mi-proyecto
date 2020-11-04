<?php
    class Menu_lib {
        public function _constructor() {
            $this->CI =& get_instance();
        }

        public function menu_navigtation() {
            $menu = array (
                array('text' => 'Home', 'url'=> ''),
                array('text' => 'Page1', 'url'=> 'admin/page1'),
                array('text' => 'Page2', 'url'=> 'admin/page2'),
            );

            $html = '';
            foreach($menu as $data) {
               $html .= '<li>';
               $html .= anchor('', $data['text']);
               $html .= '</li>';
            }
            return 
        }
    }
?>
