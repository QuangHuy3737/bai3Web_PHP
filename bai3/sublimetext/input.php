<?php
if(!empty($_POST)){
    $id=$tieuDe=$link=$moTa=$ngayDang="";
    if(isset($_POST['tieude'])){
        $tieuDe= $_POST['tieude'];
    }
    if(isset($_POST['link'])){
        $link= $_POST['link'];
    }
    if(isset($_POST['tieude'])){
        $tieude= $_POST['tieude'];
    }
    if(isset($_POST['mota'])){
        $mota= $_POST['mota'];
    }
    if(isset($_POST['ngaydang'])){
        $ngayDang= $_POST['ngaydang'];
    }
    if(isset($_POST['id'])){
        $id= $_POST['id'];
    }
    require_once('../db/dbHelper.php');
    // if($id != ''){
    //     //update
    //     $sql="update set news title='$t', content='$m',create_at='$n',thumbnail='$l' where id= ".$id;

    // }
    
        //insert
    $sql="insert into news(title, content,create_at,thumbnail) values ('$tieuDe', '$moTa','$ngayDang','$link')";

    
    execute($sql);
    header('Location: list.php');
    die();
    
    
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $sql = 'select * from news where id ='.$id;
        $newsList= executeResult($sql);
        if($newsList != null && count($newsList) >0){
            $new =$newsList[0];
            $t =$new['title'];
            $l=$new['thumbnail'];
            $m=$new['content'];
            $n=$new['create_at'];

        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm tin tức</h2>
			</div>
			<div class="panel-body">
                <form method="post" >
                    <div class="form-group">
                    <label for="usr">Tiêu đề</label>
                    <input required="true" type="text" class="form-control" name="tieude" value="<?=$t?>">
                    </div>
                    <div class="form-group">
                    <label for="email">Link Hình ảnh</label>
                    <input required="true" type="text" class="form-control" name="link" value="<?=$l?>">
                    </div>
                    <div class="form-group">
                    <label for="birthday">Mô tả</label>
                    <input type="text" class="form-control" name="mota" value="<?=$m?>">
                    </div>
                    <div class="form-group">
                    <label for="pwd">Ngày đăng</label>
                    <input required="true" type="date" class="form-control" name="ngaydang" value="<?=$n?>">
                    </div>
                    
                    <button class="btn btn-success">Thêm tin tức</button>
                </form>
			</div>

		</div>
	</div>
</body>
</html>