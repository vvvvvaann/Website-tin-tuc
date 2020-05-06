<?php
if (isset($_SESSION['user_id']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: http://localhost/websitetintuc/dang-nhap.php');
}else {
	if (isset($_SESSION['permision']) == true) {
		// Ngược lại nếu đã đăng nhập
		$permission = $_SESSION['permision'];
		// Kiểm tra quyền của người đó có phải là admin hay không
		if ($permission == '0') {
			// Nếu không phải admin thì xuất thông báo
			echo "Bạn không đủ quyền truy cập vào trang này<br>";
			echo "<a href='http://localhost/websitetintuc/index.php'> Click để về lại trang chủ </a>";
			exit();
		}
	}
}
?>