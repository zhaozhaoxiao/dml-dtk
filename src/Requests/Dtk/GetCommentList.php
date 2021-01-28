<?php
    /**
     * 获取评论列表
     * Created by PhpStorm.
     * User: lishun
     * Date: 2021/1/27
     * Time: 18:52
     */

    namespace Dtk\Requests\Dtk;

    use Dtk\Requests\DtkRequest;

    class GetCommentList extends DtkRequest
    {
        public $version = 'v1.0.0';
        public $api = '/comment/get-comment-list';
    }