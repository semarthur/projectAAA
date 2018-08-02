<?php 

class M_data extends CI_Model{
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function tampil_data(){
		return $this->db->get('form');
	}

	function tampil_data_HRD(){
		return $this->db->query("select * from form where dari LIKE 'HRD'");
	}

	function tampil_data_FA(){
		return $this->db->query("select * from form where dari LIKE 'Financial & Accounting'");
	}

	function tampil_data_done(){
		return $this->db->get('form_done');
	}

	function check_login($email,$password){		
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get('account')->row();
	}

	function fetch_data_search($search){
		$this->db->select("*");
		$this->db->from("form");
		if($search != ''){
			$this->db->like('noticket', $search);
   			$this->db->or_like('nama', $search);
   			$this->db->or_like('dari', $search);
   			$this->db->or_like('kasus', $search);
		}
		return $this->db->get();
	}

	function searchbox($noticket,$name,$from,$case){
		$this->db->where('noticket',$noticket);
		$this->db->like('nama',$name);
		$this->db->like('dari',$from);
		$this->db->like('kasus',$case);
		return $this->db->get('form');
	}

	function search_ticket($search){
		return $this->db->query("select * from form where noticket and nama and dari and kasus LIKE \"%$search%\"");
	}

	function search_ticket_done($search){
		return $this->db->query("select * from form_done where noticket LIKE \"%$search%\"");
	}

	function edit_status($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_status($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function get_noticket($where){		
		return $this->db->get_where('form',$where);
	}

	function get_e_mail($where){		
		return $this->db->get_where('form',$where);
	} 

	function get($table){
		return $this->db->get($table);
	}

	function get_jabatan_sekarang($email){
		return $this->db->query("select id_jabatan,Departemen from account where email LIKE \"%$email%\"");
	}

	function get_higher_jabatan($id_jabatan, $departemen){
		return $this->db->query("select * from account where id_jabatan LIKE \"%$id_jabatan%\" AND Departemen LIKE \"%$departemen%\"");
	}

	function pindah_table($where,$data,$table){
		$this->db->where($where);
		$q = $this->db->get('form')->result();
		foreach ($q as $r) { 
        	$this->db->insert('form_done', $r); 
    	}
    	$this->db->where($where);
    	$this->db->delete('form');
	}

	function pindah_table_na($where,$data,$table){
		$this->db->where($where);
		$q = $this->db->get('form')->result();
		foreach ($q as $r) { 
        	$this->db->insert('form_na', $r);
    	}
    	$this->db->where($where);
    	$this->db->delete('form');
	}

	function sort_data_approved_dh(){
		return $this->db->query("select * from form where approvalstatus LIKE 'Approved by Dept. Head'");
	}

	function sort_data_approved_asm(){
		return $this->db->query("select * from form where approvalstatus LIKE 'Approved by A. Manager'");
	}

	function sort_data_approved_pending(){
		return $this->db->query("select * from form where approvalstatus LIKE 'Pending'");
	}

	function sort_data_urgency_normal(){
		return $this->db->query("select * from form where urgency LIKE 'normal'");
	}

	function sort_data_urgency_immedietly(){
		return $this->db->query("select * from form where urgency LIKE 'immedietly'");
	}

	function sort_data_process_np(){
		return $this->db->query("select * from form where process LIKE 'Not Processed'");
	}

	function sort_data_process_op(){
		return $this->db->query("select * from form where process LIKE 'On Process'");
	}

	function approved_pending_HRD(){
		return $this->db->query("select * from form where approvalstatus LIKE 'Pending' AND dari LIKE 'HRD'");
	}

	function approved_pending_FA(){
		return $this->db->query("select * from form where approvalstatus LIKE 'Pending' AND dari LIKE 'Financial & Accounting'");
	}

	function approved_asm_HRD(){
		return $this->db->query("select * from form where approvalstatus LIKE 'Approved by A. Manager' AND dari LIKE 'HRD'");
	}

	function approved_dh_HRD(){
		return $this->db->query("select * from form where approvalstatus LIKE 'Approved by Dept. Head' AND dari LIKE 'HRD'");
	}

	function approved_asm_FA(){
		return $this->db->query("select * from form where approvalstatus LIKE 'Approved by A. Manager' AND dari LIKE 'Financial & Accounting'");
	}

	function approved_dh_FA(){
		return $this->db->query("select * from form where approvalstatus LIKE 'Approved by Dept. Head' AND dari LIKE 'Financial & Accounting'");
	}

}