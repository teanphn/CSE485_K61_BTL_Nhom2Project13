<?php
include('../connect/constants.php');
include('checklogin.php');
if ($_SESSION['loai'] == 2) {
    header('location:nguoidung.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Quản lý</title>
</head>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<section class="vh-100" style="background-color: #eee;">
    <div class="container">
        <h1>Quản lý thông tin và lịch làm của nhân viên</h1>
        <table class=" table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Tuổi</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tên công việc</th>
                    <th scope="col">Chi tiết</th>
                    <th scope="col">Xóa</th>

                </tr>
            <tbody>
                <?php
                include '../connect/constants.php';
                $sql = "SELECT iduser,`ho ten`,tuoi,`dia chi`,email,ten FROM user,kehoach WhERE user.iduser = kehoach.idus AND loai = 2 ";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['iduser'] . '</th>';
                        echo '<td>' . $row["ho ten"] . '</td>';
                        echo '<td>' . $row["tuoi"] . '</td>';
                        echo '<td>' . $row["dia chi"] . '</td>';
                        echo '<td>' . $row["email"] . '</td>';
                        echo '<td>' . $row["ten"] . '</td>';
                        echo '<td><a href="sua.php?id=' . $row["iduser"] . '" ><i class="bi bi-emoji-heart-eyes"></i>chi tiết</a></td>';
                        echo '<td><a href="process_xoa.php?id=' . $row["iduser"] . '" ><i class="bi bi-emoji-heart-eyes"></i>Xóa</a></td>';

                        echo '</tr>';
                        echo '</br>';
                        $_SESSION['id'] =  $row['iduser'];
                    }
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
        <a href="logout.php" class="btn btn-primary btn-lg " style=" position: relative;left: 1000px;">
            <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>

    </div>
</section>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>

</html>