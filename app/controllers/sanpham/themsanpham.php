<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<div class="card card-primary w-100">
              <div class="card-header">
                <h3 class="card-title">Thêm sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="ml-5" action="index.php?act=themsanpham " method="POST">
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Hình sản phẩm</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Giá</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Nhập giá sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Giảm giá</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Nhập giảm giá sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả</label>
                    <textarea name="" class="form-control" id="exampleInputPassword1" cols="10" rows="7" placeholder="Nhập mô tả sản phẩm"></textarea>
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Số lượng</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Nhập số lượng">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Thêm</button>
      <input class="btn btn-secondary" type="reset" value="Nhập lại">
      <a href="index.php?act=danhsachsanpham" class="btn btn-success">Danh sách</a>
                </div>
              </form>
            </div>
          </nav>


