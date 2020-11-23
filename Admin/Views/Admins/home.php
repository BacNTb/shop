<div class="card">
    <h5 class="card-header text-danger">Danh Sách Admin</h5>
    <div class="card-body">
        <div>
            <a href="/Admin/Admins/create/" class="btn btn-primary btn-xs">
                Thêm Admin
            </a>
        </div>

        <ul class="list-group mt-3">
            <?php foreach ($admin as $row) { ?>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="/Admin/Admins/admin/" class="btn btn-xs">
                        <?php echo $row['name'];?>
                    </a>
                </li>

            <?php } ?>
        </ul>
    </div>
</div>