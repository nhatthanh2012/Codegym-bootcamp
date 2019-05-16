<h2>Danh sách khách hàng</h2>
<a href="./index.php?controller=khach-hang&action=add">Thêm mới</a>
<table class="table" border = '2'>
  <thead>
  <tr>
      <th>STT</th>
      <th>Name</th>
      <th>Email</th>
      <th>Adress</th>
  </tr>
  </thead>
  <tbody>
  <?php 

    foreach ($customers as $key => $customer):?>
      <tr>
          <td><?php echo ++$key ?></td>
          <td><?php echo $customer->name ?></td>
          <td><?php echo $customer->email ?></td>
          <td><?php echo $customer->address ?></td>

          <td>              
              <a href="index.php?controller=khach-hang&action=edit&id=<?php echo $customer->id;?>">SỬA</a>
              <a onclick ="return confirm('ban co chac muon xoa khong') " href="index.php?controller=khach-hang&action=delete&id=<?php echo $customer->id;?>">XÓA</a>
          </td>
    <?php endforeach; ?>
  </tbody>
</table>