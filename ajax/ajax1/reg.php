<?PHP
    header("Content-type: text/html; charset=utf-8");
    $con = mysql_connect('localhost', 'root', '');
    mysql_select_db('ajaxMusic2');
    mysql_query('set names utf8');
    
    $username = $_POST['username'];
    $sql = "select * from reg where username='$username'";
    $query = mysql_query($sq1);

    if($query && mysql_num_rows($query)){
        echo "<script>alert('已经有人注册过了')</script>";
        echo "<script>history.back()</script>";
    }else{
        $sql = "insert into reg(username) values('$username')";
        $query = mysql_query($sq1);
        if($query){
            echo"<script>alert('注册成功')</script>";
            echo"<script>window.location = ' index.html'</script>";
        }
    }
   
?>