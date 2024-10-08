<?php
class Post {	
   
	private $postTable = 'forum_posts';
	private $userTable = 'forum_users';
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	
	
	public function getPost(){		
		$sqlQuery = "
			SELECT *
			FROM ".$this->postTable." ORDER BY post_id DESC LIMIT 3";
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();			
		return $result;	
	}
	
	public function insert(){				
		if($this->message && $this->topic_id && $_SESSION["userid"]) {

			$stmt = $this->conn->prepare("
				INSERT INTO ".$this->postTable."(`message`, `topic_id`, `user_id`)
				VALUES(?, ?, ?)");
						
			$stmt->bind_param("sii", $this->message, $this->topic_id, $_SESSION["userid"]);
			
			if($stmt->execute()){	
				$lastPid = $stmt->insert_id;
				$sqlQuery = "
					SELECT post.post_id, post.message, post.user_id, DATE_FORMAT(post.created,'%d %M %Y %H:%i:%s') AS post_date, user.name
					FROM ".$this->postTable." post
					LEFT JOIN ".$this->userTable." user ON post.user_id = user.user_id
					WHERE post.post_id = '".$lastPid."'";
				$stmt2 = $this->conn->prepare($sqlQuery);				
				$stmt2->execute();
				$result = $stmt2->get_result();
				$record = $result->fetch_assoc();
				echo json_encode($record);
			}		
		}
	}

	public function update(){
		
		if($this->post_id && $this->message) {

			$stmt = $this->conn->prepare("
				UPDATE ".$this->postTable." SET message = ? 
				WHERE post_id = ?");
						
			$stmt->bind_param("si", $this->message, $this->post_id);
			
			if($stmt->execute()){					
				$sqlQuery = "
					SELECT post.post_id, post.message, post.user_id, DATE_FORMAT(post.created,'%d %M %Y %H:%i:%s') AS post_date, user.name
					FROM ".$this->postTable." post
					LEFT JOIN ".$this->userTable." user ON post.user_id = user.user_id
					WHERE post.post_id = '".$this->post_id."'";
				$stmt2 = $this->conn->prepare($sqlQuery);				
				$stmt2->execute();
				$result = $stmt2->get_result();
				$record = $result->fetch_assoc();
				echo json_encode($record);
			}		
		}
	}

	//ta funfando no lugar do update
	public function delete() {
		// Verifica se post_id foi fornecido
		if($this->post_id) {
			// Prepara a consulta SQL para deletar o post
			$stmt = $this->conn->prepare("DELETE FROM ".$this->postTable." WHERE post_id = ?");
			
			// Vincula o parâmetro post_id
			$stmt->bind_param("i", $this->post_id);
			
			// Executa a consulta
			if($stmt->execute()) {
				// Verifica se o post foi deletado
				if($stmt->affected_rows > 0) {
					// Retorna uma resposta de sucesso
					echo json_encode(array("message" => "Post deleted successfully."));
				} else {
					// Retorna uma mensagem se o post não foi encontrado
					echo json_encode(array("message" => "Post not found."));
				}
			} else {
				// Retorna uma mensagem de erro se a execução falhar
				echo json_encode(array("message" => "Error deleting post."));
			}
		} else {
			// Retorna uma mensagem de erro se post_id não estiver definido
			echo json_encode(array("message" => "Invalid post ID."));
		}
	}	
}
?>