<?php 
//// KHAI BAO BIEN TOAN CUC
global $conn;

//// Hàm Kết Nối Database
function connectDB()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Nếu chưa kết nối thì thực hiện kết nối
    if (!$conn){
        $conn = mysqli_connect('localhost', 'my_user', 'my_password', 'my_db') or die ('Can\'t not connect to database');
        // Thiết lập font chữ kết nối
        mysqli_set_charset($conn, 'utf8');
    }
}

//// HÀM NGẮT KẾT NỐI DB
function disconnectDB()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Nếu đã kêt nối thì thực hiện ngắt kết nối
    if ($conn){
        mysqli_close($conn);
    }
}
