<?php
  if(!isset($_SESSION['id'])){
      header('user/login');
  }
?>

<!--foreach 语法结构提供了遍历数组的简单方式。foreach 仅能够应用于数组和对象-->

<?php
foreach ($bloglist as $v){
    ?>
    <h3><?php echo $v->title?></h3>
    <p><?php echo $v->content?></p>
    <hr />
<?php
}
?>

<?php echo $this->pagination->create_links();?>