<?php
$sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);

?>
<div class="menu">
    <ul class="list_menu">
        <li><a href="index.php">Trang chủ</a></li>
        <?php
        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
        ?>
            <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['ten_dm'] ?></a></li>
        <?php
        }
        ?>

    </ul>
    <form action="index.php?quanly=timkiem" method="POST">
        <p><input type="text" placeholder="Tìm kiếm sản phẩm .." name="tukhoa">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </p>
    </form>
</div>