<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>검색결과</title>
	<style>
		body{background-color:#A1A0D0;}
		#baner{max-width: 100%; height: auto;}
		table{ margin-left:auto; margin-right:auto; border-collapse : collapse;}
		thead{background-color:#FFD130; color:#401C17;}
		td, th{ border-bottom : 2px solid #FFD130; color:#401C17; text-align : left; width:200px; height:20px;}
		tbody tr:hover{ background:#E6E6FA;}
		h3{text-align:center; color:#401C17; text-shadow:1px 1px 1px #FFD130;}
		
	</style>
</head>
<body>
	<br><a href = "main.html"><img src="media/b.jpg" id = "baner"></a><br><br><br>
	<?php
	$want = $_POST["want1"];
	
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "select * from mirna where miRNA_ID = '$want' order by num";
    $result = mysqli_query($con, $sql);
	
	if (!$result)
        echo "검색 결과가 없습니다!";
    else
    {
		?>
		<h3><?=$want?>에 대한 검색 결과</h3>
		<table>
			<thead>
             <tr><th>miRNA ID</th><th>Gene ID</th><th>Ensembl ID</th><th>OMIM number</th><th>Gene name</th><tr>
			</thead>
	<?php
        while( $row = mysqli_fetch_array($result) )
        {

?>
		<tbody>
			<tr><td><?=$row["miRNA_ID"]?></td><td><?=$row["Gene_ID"]?></td><td><?=$row["Ensembl_ID"]?></td><td><?=$row["OMIM"]?></td><td><?=$row["Gene_Name"]?></td></tr>
		<tbody>
<?php
        }
    }
	mysqli_close($con);
?>

</body>
</html>