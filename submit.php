<!DOCTYPE html>
<html lang="ko">
	
<head>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
	
	<!-- <script type="text/javascript">
		window.onpageshow = function(event) {
		if ( event.persisted || (window.performance && 					window.performance.navigation.type == 2)) {
		// Back Forward Cache로 브라우저가 로딩될 경우 혹은 브라우저 뒤로가기 했을 경우
		alert("히스토리백!!!!");
				}
		}

	</script> -->

	

	<!-- <link rel="import" href="https://kmskakao.run.goorm.io/confirm"> -->
	<!-- <script src="/js/html2canvas.js"></script> -->
	<style type="text/css">
		
			h1{
				 color:blue;
			  	 font-size: 2.4rem;				
			}
			/* body::after{	 
				background: url(http://www.digitaltoday.co.kr/news/photo/202006/238713_209517_5440.png);
				content: "";
				opacity: 0.1;
				position: absolute;
				top: 0;
				bottom: 0;
				right: 0;
				left: 0;
				z-index: -1;  
			 } */
	</style>
	<meta charset="UTF-8">
	<title>submit</title>
</head>
	


	
<body>
	
	
	
	
		<!-- <script>	
			window.onpageshow = 
			
			{
			
		}	

		</script> -->
	
	</br></br>
	<?php
		// print_r($_POST);
	
		list($a, $b) = explode(",", $_POST['image']);
		list($name, $e) = explode(",", $_POST['name']);
		list($compony, $g) = explode(",", $_POST['compony']);
		list($number, $i) = explode(",", $_POST['number']);

		// mysql_query("set session character_set_connection=utf8;");

		// mysql_query("set session character_set_results=utf8;");

		// mysql_query("set session character_set_client=utf8;");

		// echo $number;

		$today = date("Y-m-d H:i:s");

		// 아래는 이미지 디코딩 코드 -> 변환해줘야 이미지를 볼 수 있다.
		// $c = base64_decode($b);
		
		// echo $d;
		// echo $f;
		// echo $h;

		$conn = mysqli_connect("localhost", "kms", "kms!", "kms");

		if(!$conn){
			die("연결이 되어 있지 않습니다. 회사로 문의 부탁드립니다. " . mysqli_connect_error());
		}

		$sql = "INSERT INTO kms_confirm(name, compony, number, date)
		VALUES ('$name', '$compony', '$number', '$today')";
			
		
		if (mysqli_query($conn, $sql)) {
		  $str = "제출이 완료되었습니다.";
		  echo "&nbsp&nbsp&nbsp<span style='font-size:3rem; color:blue'>$str</span>";
		} else {
		  echo "  제출이 되지 않았습니다. 회사로 문의 부탁드립니다. " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		// 이미지로 저장하려면 웹, 모바일 해상도를 다 맞춰야 하기 때문에 힘들다 ㅠ_ㅠ
		// 일단 텍스트 형식으로 저장하여 어느 크루가 동의를 하였는지만 텍스트 문서로 저장함. 어차피 이미지는 계속 동일할거기 때문에 동의여부가 중요하다 판단.

		// $fp = fopen("/workspace/db_server/db/".$today."_".$name."_".$compony."_".$number."_".".txt", "wb");

		// $fp = fopen("/workspace/db_server/db_img/".$d."_".$f."_".$h.".png", "wb");
		// fwrite($fp, "동의함.");
		// fclose($fp);

	?>
	
	
	
	</body>

	<script>
		function backup (event) {
		
				alert('제출이 완료되었습니다.');
			
		}
		
	</script>


</html>