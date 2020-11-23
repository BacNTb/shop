<div class="card">
    <h5 class="card-header text-danger">Thông Tin Khách Hàng</h5>
    <div class="card-body">
        <table class="table table-hover table-product table-product text-center">
            <thead>
                <tr class="thead-light">
                    <th>ID</th>
                    <th>Tên Khách Hàng</th>
                    <th style="width: 25%;">Địa Chỉ</th>
                    <th style="width: 25%;">Email</th>
                    <th>Số điện thoại</th>
                    <th>Số tiền</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($cus as $rowCus) { ?>
                    <tr>
                        <td><?php echo $rowCus['id']; ?></td>
                        <td>
                            <a style="border-radius:5px; border: none;" href="/Admin/Custummers/cus/<?php echo $rowCus['id']; ?>" class="list-group-item list-group-item-action"><?php echo $rowCus['name']; ?></a>    
                        </td>
                        <td><?php echo $rowCus['address']; ?></td>
                        <td><?php echo $rowCus['email']; ?></td>
                        <td>0<?php echo $rowCus['tell']; ?></td>
                        <td>
                            <span class="badge badge-primary badge-pill">
                            <?php $total_priceAll = 0;?>
                            <?php foreach ($check as $rowCheck) {
                                    if($rowCheck['cus_id'] == $rowCus['id']) {

                                        $total_priceAll += $rowCheck['total_price'];
                                    }
                                } 
                            ?>
                            <?php echo number_format($total_priceAll, 0, ',', '.'); ?><sup>đ</sup>
                            </span>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>