<div class="card">
    <h5 class="card-header text-danger">Danh sách sản phẩm</h5>
    <div class="card-body">
        <div class="div-link">
            <a href="/Admin/Leds/create/" class="btn btn-primary btn-xs">
                Thêm sản phẩm
            </a>
        </div>

        <table class="table table-hover table-product table-product mt-3 text-center">
            <thead>
                <tr class="thead-light">
                    <th>ID</th>
                    <th style="width: 20%;">Danh mục</th>
                    <th style="width: 25%;">Tên sản phẩm</th>
                    <th style="width: 20%;">Ảnh sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Lựa chọn</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($led as $rowLed) { ?>
                    <tr>
                        <td><?php echo $rowLed['id']; ?></td>
                        <td>
                            <?php foreach ($cate as $rowCate) { ?>
                                <?php if ($rowLed['categori_id'] == $rowCate['id']) { ?>

                                    <?php echo $rowCate['name']; ?>

                                <?php } ?>
                            <?php } ?>
                        </td>
                        <td><?php echo $rowLed['name']; ?></td>

                        <td>
                            <?php $arrImg = []; ?>
                            <?php foreach ($img as $key => $rowImg) { ?>

                                <?php if ($rowLed['id'] == $rowImg['led_id']) { ?>

                                <?php $arrImg[] = $rowImg['name']; ?>

                                <?php } ?>
                            <?php } ?>

                            <div class="carousel-inner-img">
                                <img style="margin: 0 auto;" width="100px" src="/Admin/Views/Img/<?php echo $arrImg['0']; ?>" alt="<?php echo $arrImg['0']; ?>">
                               
                            </div>
                        </td>

                        <td><?php echo number_format($rowLed['price'], 0, ',', '.'); ?><sup>đ</sup></td>
                        <td class='text-center d-flex justify-content-center align-items-center'>
                            <a class='btn btn-outline-info btn-sm' href='/Admin/Leds/edit/<?php echo $rowLed["id"];?>' style="margin-right: 4px;">
                                <span class='glyphicon glyphicon-edit'></span>
                                Sửa
                            </a>
                            <form action="" method="post">
                                <input type="hidden" value="<?php echo $rowLed["id"]; ?>" name="delete">
                                <button onclick="return xoaSanpham();" class="btn btn-outline-danger btn-sm">Xóa</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>