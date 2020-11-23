
<div class="card">
    <h5 class="card-header text-danger">Thêm Đèn Led</h5>
    <div class="card-body">
        <a href="/Admin/Leds/home/" class="btn btn-info btn-sm" style="margin-bottom: 20px;">Trở lại</a>

        <form method='post' action='#' enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Danh mục sản phẩm</label>
                <select class="custom-select" id="inputGroupSelect02" name="categori_id" required="">
                    <option selected>Chọn...</option>
                    <?php foreach ($cate as $row) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name'];?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="title">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" placeholder="VD: LED sáng" name="name" required="">
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="image">Ảnh sản phẩm</label>
                    <input style="display: none;" multiple type="file" id="image" class="custom-file-input" name="image[]" required="">
                    <label class="custom-file-lable" for="image">Chọn ảnh</label>
                </div>
                <div class="col-md-12" id="image_show">
                
                </div>
            </div>

            <div class="form-group">
                <label for="title">Thông tin sản phẩm</label>
                <input type="text" class="form-control" id="description" placeholder="100W" name="description" required="">
            </div>

            <div class="form-group">
                <label for="description">Giá sản phẩm</label>
                <input type="text" class="form-control" id="price" placeholder="20090000" name="price" required="">
            </div>
            <button style="width: 120px;" type="submit" class="btn btn-primary">Thêm</button>
            <button style="width: 120px;" type="reset" class="btn btn-warning">Nhập lại</button>
        </form>
    </div>
</div>