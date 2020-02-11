<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sample</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <form method="post" action="sent.php">
        <div class="form-item">名前</div>
        <input type="text" name="name">

        <div class="form-item">年齢</div>
        <select name="age">
          <option value="未選択">選択してください</option>
          <?php
            for($i =6;$i<=100;$i++){
              echo "<option value='{$i}'>$i</option>";
            }
          ?>
        </select>

        <div class="form-item">お問い合わせの種類</div>
        <?php
          $types = array('Sampleに関するお問い合わせ', 'Sampleに対する意見', '採用に関するお問い合わせ', '取材・メディア関連のお問い合わせ', '料金に関するお問い合わせ', 'その他');
         ?>
        <select name="category">
          <option value='未選択'>選択してください</option>
          <?php
            foreach($types as $value){
              echo "<option value='{$value}'>$value</option>";
            }
          ?>
        </select>

        <div class="form-item">内容</div>
        <textarea name="body"></textarea>

        <input type="submit" value="送信">
      </form>
    </div>
  </div>

</body>
</html>+=