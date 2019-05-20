<h1>Danh sách user</h1>
<a href="index.php?controller=user&page=list">Register</a>
<table class="table" border = '2'>
  <thead>
  <tr>
      <th>STT</th>
      <th>USERNAME</th>
      <th>PASSWORD</th>      
      <th>FULLNAME</th>
      <th>BIRTHDAY</th>
      <th>ROLE</th>
      <th>EMAIL</th>
      <th>XỬ LÝ</th>    
  </tr>
  </thead>
  <tbody>
  <?php 

    foreach ($listusers as $key => $user):?>
      <tr>
          <td><?php echo ++$key ?></td>
          <td><?php echo $user->username ?></td>
          <td><?php echo $user->password?></td>
          <td><?php echo $user->fullname?></td>
          <td><?php echo $user->birthday ?></td>
          <td><?php echo $user->role ?></td>
          <td><?php echo $user->email ?></td>
          <td>
                <a href="index.php?controller=user&page=edit&id=<?php echo $user->id;?>">UPDATE</a>
              <a onclick ="return confirm('ban co chac muon xoa khong') " href="index.php?controller=khach-hang&action=delete&id=<?php echo $customer->id;?>">DELETE</a>
          </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>