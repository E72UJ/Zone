<?php
/**
 * Zone theme for Typecho
 * 设计灵感来源yinwang.org 简洁轻快 移动端阅读体验良好
 * @package Zone Theme
 * @author Furau
 * @version 
 * @link http://www.furau.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="outer">
    <ul class="list-group">
      
    <?php while ($this->next()): ?>
        <li class="list-group-item title">
            <div class="date"><?php $this->date('F j, Y'); ?></div><br>
            <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
        </li>
    <?php endwhile; ?>
    </ul>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  </body>

</html>
