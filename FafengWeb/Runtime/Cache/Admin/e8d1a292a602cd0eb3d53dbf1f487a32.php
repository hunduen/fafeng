<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        table,tr,td{
            border:1px solid #9B410E;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>id:</td>
            <td><?php echo ($data["id"]); ?></td>
        </tr>
        <tr>
            <td>标题：</td>
            <td><?php echo ($data["title"]); ?></td>
        </tr>
        <tr>
            <td>内容：</td>
            <td><?php echo ($data["content"]); ?></td>
        </tr>
    </table>
</body>
</html>