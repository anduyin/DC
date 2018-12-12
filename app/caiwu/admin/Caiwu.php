<?php
namespace app\caiwu\admin;
use app\admin\controller\Admin;

class Caiwu extends Admin
{
    public function index()
    {
        return $this->fetch();
    }
}