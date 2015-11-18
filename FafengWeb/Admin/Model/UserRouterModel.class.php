<?php
namespace Home\Model;
use Think\Model;
class UserRouterModel extends Model {
    protected $_validate = array(
        array('username','require','用户名必填！'),
        array('userType','require','用户类型必填！')
    );
}
