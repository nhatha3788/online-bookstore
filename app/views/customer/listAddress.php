<?php
    while($row = mysqli_fetch_array($temp_add_run)){
        echo "
        <tr>
        <td>$row[address]</td>
        </tr>
        <tr>
        <td>
        <div class='action'>
        <button type='button' class='btn btn-primary'>Chọn</button>
        <button type='button'class='btn btn-success' id='emailBtn' data-bs-toggle='modal' data-bs-target='#editReceiveAddress'>Chỉnh sửa</button>
        <div class='modal fade ' id='editReceiveAddress' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='emailBackdropLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h1 class='modal-title fs-5' id='emailBackdropLabel'>THAY ĐỔI ĐỊA CHỈ NHẬN HÀNG</h1>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <label for='newEmail' class='form-label'>Nhập địa chỉ mới</label>
                    <input type='email' class='form-control' id='newEmail'>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-primary confirm-button'>Xác nhận</button>
                </div>
                </div>
            </div>
        </div>
        </div>
        </td>
        </tr>
        ";
        
    }
?>