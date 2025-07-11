<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<table class="list" border="1">
    <tr>
        <td colspan="9"><h3>Danh sách thành viên [<?= date('d/m/y H:i A'); ?>]</h3></td>
    </tr>
    <thead>
        <tr>
            <td class="left" width="30">STT</td>
            <td class="left" width="60">Mã số khách hàng </td>
            <td class="left">Họ tên</td>
            <td class="left" width="60">Giới tính</td>
            <td class="left" width="150">Email</td>
            <td class="left" width="90">Điện thoại</td>
            <td class="left" width="140">Ngày đăng ký</td>
            <td class="center" width="70">Số điểm</td>
            <td class="center" width="60">Hoạt động</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($list as $row) {
            $id = $row['id'];
            $status = $row['status'];
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $phone_secondary = $row['phone_secondary'];
            $create_date = date("d-m-Y H:i A", strtotime($row['create_date']));
            $gender = $row['gender'] == 0 ? "Nam" : "Nữ";
            $status = $status == 1 ? "Có" : "Không";
            $scouce = $this->member->sms_DIEM($id);
            ?>
            <tr>
                <td class="center"><?= $i; ?></td>
                <td class="left"><?php echo $id; ?></td>
                <td class="left"><?= $name; ?></td>                                    
                <td class="left"><?php echo $gender; ?></td> 
                <td class="left"><?php echo $email; ?></td> 
                <td class="left"><?php echo $phone; ?><br/><?php echo $phone_secondary; ?></td> 
                <td class="left"><?php echo $create_date; ?></td> 
                <td class="center"><?php echo $scouce; ?></td>
                <td class="center"><?= $status; ?></td>
            </tr>

            <?php
            $i++;
        }
        ?>
    </tbody>
</table>
