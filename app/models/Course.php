<?php
 	class Course {
 		
			public function __construct($param=false){}
		
 		public function get_all_courses($department, $program) {
 			$db = db_connect();
 			$statement = $db->prepare("select * from courses where department= :department and program = :program;");
			$statement->execute(array(':department' => $department, ':program' => $program));
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}

 		public function get_all_departments() {
 			$db = db_connect();
 			$statement = $db->prepare("select distinct(department) from courses");
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}
		
		public function get_all_programs() {
 			$db = db_connect();
 			$statement = $db->prepare("select distinct(department), program from courses");
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}

		public function get_all_programs_by_department($department) {
 			$db = db_connect();
 			$statement = $db->prepare("select department, program from courses where department= :department;");
			$statement->execute(array(':department' => $department));
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}
 	}
 ?> 