<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<div class="row w-100">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Danh sách sản phẩm</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 200px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 500px;">
          <form action="index.php?act=danhsachsanpham" method="post">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên</th>
                  <th>Giá</th>
                  <th>Giảm giá</th>
                  <th>Hình</th>
                  <th>Mô tả</th>
                  <th>Danh mục</th>
                  <th>Chức năng</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>183</td>
                  <td>John Doe</td>
                  <td><img src="/iPhone 14 Pro Max.jpg" alt="" style="width: 75px; height: 100px;"></td>
                  <td>
                    <button class="btn btn-danger">Xóa</button>
                    <a href="index.php?act=capnhatsanpham"><input class="btn btn-success" type="button" value="cập nhật"></a>
                  </td>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>183</td>
                  <td>John Doe</td>
                  <td><img src="/iPhone 14 Pro Max.jpg" alt="" style="width: 75px; height: 100px;"></td>
                  <td>
                    <button class="btn btn-danger">Xóa</button>
                    <a href="index.php?act=capnhatsanpham"><input class="btn btn-success" type="button" value="cập nhật"></a>
                  </td>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>183</td>
                  <td>John Doe</td>
                  <td><img src="/iPhone 14 Pro Max.jpg" alt="" style="width: 75px; height: 100px;"></td>
                  <td>
                    <button class="btn btn-danger">Xóa</button>
                    <a href="index.php?act=capnhatsanpham"><input class="btn btn-success" type="button" value="cập nhật"></a>
                  </td>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>183</td>
                  <td>John Doe</td>
                  <td><img src="/iPhone 14 Pro Max.jpg" alt="" style="width: 75px; height: 100px;"></td>
                  <td>
                    <button class="btn btn-danger">Xóa</button>
                    <a href="index.php?act=capnhatsanpham"><input class="btn btn-success" type="button" value="cập nhật"></a>
                  </td>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>183</td>
                  <td>John Doe</td>
                  <td><img src="/iPhone 14 Pro Max.jpg" alt="" style="width: 75px; height: 100px;"></td>
                  <td>
                    <button class="btn btn-danger">Xóa</button>
                    <a href="index.php?act=capnhatsanpham"><input class="btn btn-success" type="button" value="cập nhật"></a>
                  </td>
                </tr>
              </tbody>
            </table>

          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div><a href="index.php?act=themsanpham"><input class="btn btn-primary" type="button" value="Thêm mới" style="margin-left: 6px;"></a>
  </div>
  <!-- /.row -->
</nav>