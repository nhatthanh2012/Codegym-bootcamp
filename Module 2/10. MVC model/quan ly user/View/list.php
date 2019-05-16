<h1>Danh sách user</h1>
<a href="./index.php?controller=user&action=list">Register</a>
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
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>