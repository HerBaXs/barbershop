<?php



class Admin_Model extends CI_Model{

    public function xl_return_rows($navbar, $id) {

        $navbar_logo_rows_count = $this->db->from($navbar)->count_all_results();
        if ($navbar_logo_rows_count == 1) {
            return $this->db->get($navbar)->row_array()[$id];
        } else if ($navbar_logo_rows_count > 1) {
            return $this->db->order_by($id, "DESC")->limit(1)->get($navbar)->row_array()[$id];
        } else {
            return -1;
        }

    }   

    public function insert_staff($data)
    {
        $this->db->insert('staff', $data);
    }

    public function get_all_data()
    {
        return $this->db->order_by('s_id', 'DESC')->get('staff')->result_array();
    }

    public function get_single_staff($id)
    {
        return $this->db->where('s_id', $id)->get('staff')->row_array();
    }

    public function delete_staff($id)
    {
        $this->db->where('s_id', $id)->delete('staff');
    }

    public function staff_update($id, $data)
    {
        $this->db->where('s_id', $id)->update('staff', $data);
    }

    public function select_admin_login($data)
    {
        return $this->db->where($data)->get('admin')->row_array();
    }

    public function insert_nav($data)
    {
        $this->db->insert('navbar', $data);
    }

    public function get_all_nav()
    {
        return $this->db->get('navbar')->result_array();
    }

    public function delete_nav($id)
    {
        $this->db->where("id", $id)->delete('navbar');
    }

    public function get_single_nav($id)
    {
        return $this->db->where('id', $id)->get('navbar')->row_array();
    }

    public function nav_update($id, $data)
    {
        $this->db->where('id', $id)->update('navbar', $data);
    }

    public function nav_img_create($data)
    {
        $this->db->insert('navbar_logo', $data);
    }

    public function m_get_single_img() {

        return $this->db->get('navbar_logo')->result_array();

    }

    public function nav_img_update($id, $data) {

        $this->db->where("id", $id)->update('navbar_logo', $data);

    }

    public function get_single_img($id) {

        return $this->db->where('id', $id)->get('navbar_logo')->row_array();

    }

    public function a_nav_logo_delete($id) {

        $this->db->where('id', $id)->delete("navbar_logo");

    }

    public function a_slider_create($data_xss_cleaned) {
        $this->db->insert('slider_video_text', $data_xss_cleaned);
    }

    public function a_get_slider_edit($id) {

        return $this->db->where('id', $id)->get('slider_video_text')->row_array();

    }

    public function a_slider_edit($id) {

        $this->db->where("id", $id)->update('slider_video_text')->row_array();

    }
    

}