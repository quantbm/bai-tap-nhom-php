<ol class="breadcrumb">
    <li><a href="admin">Admin</a></li>
    <li><a href="admin?phone">Điện thoại</a></li>
    <li class="active">Thêm mới</li>
</ol>

<div class="panel panel-rim">
    <div class="panel-heading">
        <a href="admin?phone" class="go-back">
            <span class="glyphicon glyphicon-arrow-left"></span>
        </a>
        Thêm điện thoại mới
    </div>
    <div class="panel-body">
        <form class="form-horizontal">
            <h3>Thông tin cơ bản</h3>
            <hr>

            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Tên điện thoại:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" required>
                </div>
            </div>

            <div class="form-group">
                <label for="category_id" class="col-sm-2 control-label">Hãng sản xuất:</label>
                <div class="col-sm-9">
                    <select class="form-control" name="category_id" required>
                        <option value="">-- chọn hãng sản xuất --</option>
                        <?php foreach (Category::all() as $category): ?>
                            <option value="<?= $category->id ?>">
                                <?= $category->name ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="price" class="col-sm-2 control-label">Giá:</label>
                <div class="col-sm-9">
                    <input type="number" min="100000" class="form-control" name="price" required>
                </div>
            </div>

            <h3>Thông tin chi tiết</h3>
            <hr>

            <div class="form-group">
                <label for="image" class="col-sm-2 control-label">Hình đại diện:</label>
                <div class="col-sm-9">
                    <input type="file" name="image" accept="image/*">
                </div>
            </div>

            <div class="form-group">
                <label for="screen" class="col-sm-2 control-label">Màng hình:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="screen">
                </div>
            </div>

            <div class="form-group">
                <label for="before_camera" class="col-sm-2 control-label">Camera trước:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="after_camera">
                </div>
            </div>

            <div class="form-group">
                <label for="after_camera" class="col-sm-2 control-label">Camera sau:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="before_camera">
                </div>
            </div>

            <div class="form-group">
                <label for="cpu" class="col-sm-2 control-label">Cpu:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="cpu">
                </div>
            </div>

            <div class="form-group">
                <label for="ram" class="col-sm-2 control-label">Ram:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="ram">
                </div>
            </div>

            <div class="form-group">
                <label for="memory" class="col-sm-2 control-label">Bộ nhớ trong:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="memory">
                </div>
            </div>

            <div class="form-group">
                <label for="battery" class="col-sm-2 control-label">Dung lượng pin:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="battery">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-9">
                    <button type="submit" class="btn btn-blue pull-right">
                        <span class="glyphicon glyphicon-floppy-disk"></span>
                        &nbsp;
                        Thêm
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
