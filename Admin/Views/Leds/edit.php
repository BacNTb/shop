<div class="card">
    <h5 class="card-header text-danger">
        Sửa Thông Tin Đèn Led
        <?php if (isset($Led["name"])) {
                echo ' - ' . $Led["name"]; 
            }
        ?>
    </h5>
    <div class="card-body">
        <a href="/Admin/Leds/home/" class="btn btn-info btn-sm" style="margin-bottom: 20px">Trở lại</a>

        <form method='post' action='#' enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Danh mục sản phẩm</label>
                <select class="custom-select" id="inputGroupSelect02" name="categori_id">
                    <?php foreach ($cate as $row) { ?>
                        <?php if ($Led['categori_id'] == $row['id']) { ?>
                            <option selected value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php } ?>

                        <?php if ($Led['categori_id'] != $row['id']) { ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="title">Tên sản phẩm</label>
                <input type="text" class="form-control" id="title" name="name" value="<?php if (isset($Led["name"])) echo $Led["name"]; ?>">
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="image">Ảnh sản phẩm</label>
                    <input style="display: none;" multiple type="file" id="image" class="custom-file-input" name="image[]">
                    <label class="custom-file-lable" for="image">Chọn ảnh</label>
                    
                    <!-- <?php foreach ($img as $rowImg) { ?>
                        <?php if ($Led['id'] == $rowImg['led_id']) { ?>
                            <label class="custom-file-lable" for="image"><?php echo $rowImg['name']; ?></label>
                        <?php } ?>
                    <?php } ?> -->
                </div>

                <div class="col-md-12" id="image_show">
                <!-- <?php foreach ($img as $rowImg) { ?>
                    <?php if ($Led['id'] == $rowImg['led_id']) { ?>
                    <img class="img_view" width="100px" src="/Admin/Views/Img/<?php echo $rowImg['name']; ?>" class="thumbnail" alt="<?php echo $name; ?>">
                    <?php } ?>
                <?php } ?> -->
                </div>
            </div>

            <div class="form-group">
                <label for="title">Thông tin sản phẩm</label>
                <input type="text" class="form-control" id="description" name="description" value="<?php if (isset($Led["description"])) echo $Led["description"]; ?>">
            </div>

            <div class="form-group">
                <label for="description">Giá sản phẩm</label>
                <input type="text" class="form-control" id="price" name="price" value="<?php if (isset($Led["price"])) echo $Led["price"]; ?>">
            </div>
            <input style="width: 120px;" type="submit" class="btn btn-primary" value="Lưu">
        </form>
    </div>
</div>