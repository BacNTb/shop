<div class="card">
    <h5 class="card-header text-danger">Danh Sách Danh Mục</h5>
    <div class="card-body">
        <div>
            <a href="/Admin/Categoris/create/" class="btn btn-primary btn-xs">
                Thêm Danh Mục
            </a>
        </div>

        <ul class="list-group mt-3">
            <?php foreach ($cate as $rowCate) { ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="/Admin/Leds/homecateid/<?php echo $rowCate['id']; ?>" class="btn btn-xs">
                        <?php echo $rowCate['name'];?>
                    </a>
                    <span class="badge badge-primary badge-pill">
                        <?php $count = 0;
                            foreach ($led as $rowLed) {
                                if($rowLed['categori_id'] == $rowCate['id']) {
                                    $count += 1;
                                }   
                            }
                            echo $count;
                        ?>
                    </span>
                </li>
            <?php } ?>
        </ul>

    </div>
</div>