<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<title>ユーザ登録確認</title>
<body>
<?php
if(isset($_POST['name'])) $nickname = $_POST['name'];
if(isset($_POST['password'])) $password = $_POST['password'];
if(isset($_POST['introduction'])) $introduction = $_POST['introduction'];
?>
  <h3>ユーザ登録確認</h3>
  <p>以下の内容で登録してよろしいですか？</p>
  <table>
    <tr>
      <th>ニックネーム</th>
      <th>自己紹介</th>
    </tr>
    <tr>
      <td><?php echo $nickname; ?></td>
      <td><?php echo $introduction; ?></td>
    </tr>
  </table><br>
  <a href="createUser.php">戻る</a>
  登録する

</body>
</head>
</html>