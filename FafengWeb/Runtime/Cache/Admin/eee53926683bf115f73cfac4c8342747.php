<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form method="post" action="/fafeng/admin.php/Form/realDelete">
        标题：<input type="text" name="title" value="<?php echo ($del["title"]); ?>"/><br/>
        内容：<textarea name="content"><?php echo ($del["content"]); ?></textarea><br/>
        <input type="hidden" name="id" value="<?php echo ($del["id"]); ?>"/>
        <input type="submit" value="删除"/>
    </form>
</body>
</html>