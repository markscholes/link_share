<?php
class ShareModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM shares order by create_date DESC ');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add(){
		//get everything ready for sql
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if($post['submit']){
			$this->query('INSERT INTO shares ( title, body, link, user_id ) VALUES (:title, :body, :link, :user_id)');
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':link', $post['link']);
			$this->bind(':user_id', 1); // 1 used as a placeholder until registeration and login functionallity is added
			$this->execute();
			//Check to see if it has worked
			if($this->lastInsertId()){
				//successful
				//redirect
				header('location: ' . ROOT_URL . 'shares');
			} else echo "failed";
		}
		return;
	}
}
