
<div class="card">
    <h5 class="card-header text-danger">Khách hàng  - <?php echo $cus['name']; ?></h5>
    <div class="card-body">
        <a href="/Admin/Custummers/home/" class="btn btn-info btn-sm" style="margin-bottom: 20px;">Trở lại</a>
        <table class="table table-hover table-product table-product text-center table-responsive-sm">
            <thead>
                <tr class="thead-light">
                    <th>Tên Khách Hàng</th>
                    <th>ID Sản Phẩm</th>
                    <th style="width: 35%;">Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Số Tiền</th>
                    <th>Tổng Tiền</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td rowspan="<?php echo count($check) + 1;?>"><?php echo $cus['name']; ?></td>
                </tr>
                <?php $total_priceAll = 0;?>
                <?php foreach ($check as $rowCheck) { ?>
                <tr>                          
                    <td><?php echo $rowCheck['led_id'];?></td>
                    <td>
                        <?php foreach ($led as $rowLed) {
                                if($rowLed['id'] == $rowCheck['led_id']) {
                                    echo $rowLed['name'];
                                }   
                            }
                        ?>
                    </td>
                    <td><?php echo $rowCheck['count'];?></td>
                    <td><?php echo number_format($rowCheck['price'], 0, ',', '.'); ?><sup>đ</sup></td>
                    <td>
                        <span class="badge badge-primary badge-pill">
                            <?php echo number_format($rowCheck['total_price'], 0, ',', '.'); ?><sup>đ</sup>
                        </span>
                    </td>
                </tr>
                <?php $total_priceAll += $rowCheck['total_price'];?>
                <?php } ?>
                <tr class="bg-danger text-white">
                    <td colspan="5" scope="row">Tổng Tiền</td>
                    <td><?php echo number_format($total_priceAll, 0, ',', '.'); ?><sup>đ</sup></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
