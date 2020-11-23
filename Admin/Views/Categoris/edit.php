<div class="card">
    <h5 class="card-header text-danger">
        Sửa Thông Tin Danh Mục
        <?php if (isset($Cate["name"])) {
                echo ' - ' . $Cate["name"]; 
            }
        ?>
    </h5>
    <div class="card-body">
        <a href="/Admin/Categoris/cate/" class="btn btn-info btn-sm" style="margin-bottom: 20px">Trở lại</a>

        <form method='post' action='#'>
            <div class="form-group">
                <label for="title">Tên danh mục</label>
                <input type="text" class="form-control" name="name" value="<?php if (isset($Cate["name"])) echo $Cate["name"]; ?>" required="">
            </div>

            <div class="form-group">
                <label for="title">Thông tin danh mục</label>
                <input type="text" class="form-control" id="description" name="description" value="<?php if (isset($Cate["description"])) echo $Cate["description"]; ?>" required="">
            </div>

            <div class="form-group">
                <label for="title">Trạng thái </label>
                <input type="number" min="0" max="1" class="form-control" id="status" name="status" value="<?php if (isset($Cate["status"])) echo $Cate["status"]; ?>" required="">
            </div>

            <button style="width: 120px;" type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
</div>