<?php  

class Databasedx {

	function __construct() {
		try {
			$conn = new PDO("mysql:host=localhost;dbname=uprising", "root", "");
		} catch (PDOException $e) {
			alert('Try Again');
		}
		$this->db = $conn;
	}

	function uploadTrack($uploader, $artist, $title, $image, $track) {
		if( !empty($artist)&&
			!empty($title)&&
			!empty($image)&&
			!empty($track)) {

			// CEK EKSTENSI GAMBAR
			$imgEks = explode('.', $image['name']);
			$imgEks = strtolower(end($imgEks));
			if($imgEks === "jpg" OR $imgEks === "png") {

				// CEK EKSTENSI TRACK
				$trackEks = explode('.', $track['name']);
				$trackEks = strtolower(end($trackEks));
				if($trackEks === "mp3" OR $imgEks === "wav") {

					// == UPLOAD IMAGE
					$imgTmp = $image['tmp_name'];
					$image = $image["name"];

					// if(file_exists("assets/track images/" . $image)) {
					// 	$i = count(file_exists("assets/track images/" . $image));
					// 	$image = explode('.', $image);
					// 	$image = $image[0] . $i . '.' . $image[count(end($image))];

					// }
					move_uploaded_file($imgTmp, 'assets/track images/' . $image);

					// == UPLOAD TRACK
					$trackTmp = $track['tmp_name'];
					$track = $track['name'];
					move_uploaded_file($trackTmp, 'assets/tracks/' . $track);

					// == QUERY ALL
					$query = "INSERT INTO tracks VALUES('', '$uploader', '$artist', '$title', now(), '$image', '$track')";

					$stmt = $this->db->prepare($query);
					$stmt->execute();

					return 2;

				}
				
				
			} else {
				echo "<script>alert('Gambar tidak sesuai!'); document.location.href = '';</script>";
			}



		} else {
			echo "<script>alert('Fail Upload!');</script>";
		}

	}

	function getAllTrack() {
		$query = "SELECT * FROM tracks";
		$stmt = $this->db->prepare($query);
		$stmt->execute();

		return $stmt->fetchall(PDO::FETCH_ASSOC);
	}
	function getThirdTrack() {
		$query = "SELECT * FROM tracks ORDER BY id DESC LIMIT 3";
		$stmt = $this->db->prepare($query);
		$stmt->execute();

		return $stmt->fetchall(PDO::FETCH_ASSOC);
	}
	function deleteTrack($id) {
		// GET THIS TRACK
		$query = "SELECT * FROM tracks WHERE id = $id";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		$dUser = $stmt->fetch(PDO::FETCH_ASSOC);

		// HAPUS GAMBAR
		$fileImg = "assets/track images/" . $dUser["track_img"];
		unlink($fileImg);
		// HAPUS LAGU
		$fileTrack = "assets/tracks/" . $dUser["track_name"];
		unlink($fileTrack);

		// HAPUS DATA
		$query = "DELETE FROM tracks WHERE id = $id";
		$stmt = $this->db->prepare($query);
		$stmt->execute();

		return $stmt;
	}


	// ================================================

	function signUp($name, $email, $password) {
		$query = "INSERT INTO users VALUES('', '$name', '$email', '$password', NOW(), 'defaultfoto.png', 'member')";

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		return $stmt;
	}

	function signIn($email, $password) {
		$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}



?>