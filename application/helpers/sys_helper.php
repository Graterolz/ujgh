<?php
function do_upload($name = NULL) {
	$config ['upload_path'] = './uploads/';
	$config ['allowed_types'] = 'jpg|png|jpeg|pdf';
	// $config ['max_size'] = '100';
	// $config ['max_width'] = '1024';
	// $config ['max_height'] = '768';
	
	$CI = & get_instance();
	$CI->load->library('upload',$config);
	$CI->upload->initialize($config);

	if(!$CI->upload->do_upload ($name)) {
		/*$data = array( 
			'error' => $CI->upload->display_errors ()
		);*/
		$data = null;
	}else{
		$data = array(
			'upload_data' => $CI->upload->data()
		);
	}
	return $data;
}
?>