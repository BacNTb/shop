<div class="card">
    <h5 class="card-header text-danger">Danh sách khách hàng</h5>
    <div class="card-body">

        <ul class="list-group mt-3">

            <?php $total_priceAll = 0;?>
            
            <?php foreach ($cus as $rowCus) { ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="/Admin/Custummers/home/" class="btn btn-xs">
                        <?php echo $rowCus['name'];?>
                        </a>
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
                    </li>     
            <?php } ?>
        </ul>
    </div>
</div>