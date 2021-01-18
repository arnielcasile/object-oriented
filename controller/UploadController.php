<?
public function upload_data()
	{
		 $s_id = $_POST['txt_id'];

		$image_filetmp = $_FILES["image_upload_data"]["tmp_name"];
		$image_filename = $_FILES["image_upload_data"]["name"];
		$image_filetype = $_FILES["image_upload_data"]["type"];

		$file_filetmp = $_FILES["file_upload_data"]["tmp_name"];
		$file_filename = $_FILES["file_upload_data"]["name"];
		$file_filetype = $_FILES["file_upload_data"]["type"];

		//get extension
		$image_fileExt = explode('.', $image_filename);
		$image_fileActualExt = end($image_fileExt);

		$file_fileExt = explode('.', $file_filename);
		$file_fileActualExt = end($file_fileExt);

		//final name ng image
		$image_filenameNew = $s_id.'sample_image.'.$image_fileActualExt;

		$file_filenameNew  = $s_id.'sample_file.'.$file_fileActualExt;

		//get path of folder jerwyn magtuturo ng apppath 
		$image_filepath = "../../upload/" . $image_filenameNew;

		$file_filepath = "../../upload/" . $file_filenameNew;

		//FUNCTION TO MOVE IN FOLDER
		move_uploaded_file($image_filetmp, $image_filepath);

		move_uploaded_file($file_filetmp, $file_filepath);

		$data =
		[
			'image_upload'	=> $image_filenameNew,
			'file_upload'	=> $file_filenameNew
		];

		$where =
		[
			's_id =' => $_POST['txt_id']
		];

		$table = 'student_tbl';

		return $this->dashboard->update($table, $data, $where);
		
	}