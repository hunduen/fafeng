<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form method="post" action="/fafeng/admin.php/Form/update">
        标题：<input type="text" name="title" value="<?php echo ($vo["title"]); ?>"/><br/>
        内容：<textarea name="content"><?php echo ($vo["content"]); ?></textarea><br/>
        <input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
        <input type="submit" value="提交"/>
    </form>
</body>
</html>