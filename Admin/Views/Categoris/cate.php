<div class="card">
  <h5 class="card-header text-danger">
      Thông Tin Danh Mục
        <?php 
            if(isset($message)) {
                echo ' - ' . $message;        
            }
        ?>
    </h5>
  <div class="card-body">
    <table class="table table-hover table-product table-product mt-3 text-center">
        <thead>
            <tr class="thead-light">
                <th>ID</th>
                <th>Tên Danh Mục</th>
                <th>Thông Tin</th>
                <th>Trạng Thái</th>
                <th>Lựa chọn</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($cate as $row) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td>
                        <a style="border-radius:5px; border: none;" href="/Admin/Leds/homecateid/<?php echo $row['id']; ?>" class="list-group-item list-group-item-action"><?php echo $row['name']; ?></a>
                    </td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td class='text-center d-flex justify-content-center'>
                        <a class='btn btn-outline-info btn-sm' href='/Admin/Categoris/edit/<?php echo $row["id"];?>' style="margin-right: 4px;">
                            <span class='glyphicon glyphicon-edit'></span> 
                            Sửa
                        </a> 
                        <form action="" method="post">
                            <input type="hidden" value="<?php echo $row["id"]; ?>" name="delete">
                            <button onclick="return xoaDanhmuc();" class="btn btn-outline-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
  </div>
</div>

