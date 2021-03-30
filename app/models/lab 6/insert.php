<?php
<?php
class Insert {
	public function __construct() {}
	
	public function InsertData() {

	if(isset($_POST['insert'])) {
	$db = db_connect();
	} 

	$id = $_POST['id'];
	$course_id = $_POST['course_ID'];
	$course_name = $_POST['course_name'];
	$department = $_POST['course_Department'];
	$program = $_POST['program'];

	$statement = "INSERT INTO courses ('id','course_id','course_name','department','program') VALUES (:id, :course_id, :course_name, :department, :program)";
	$statementResult = $db->prepare($statement);
	$statementExecute->execute(array(':id' => $id, ':course_id' => $course_id, ':course_name' => $course_name, ':department' =>$department, ':program' => $program));

	if($statementExecute) {
	echo 'Data Inserted';
	}
	else{
	'Data Not Inserted';
	}
}
}
?>	
?>