<?php

namespace ziya\TestNinja\base\actions;

class ActionResult
{
    public const SUCCESS = 100;
    public const FAIL = 200;

    private int $status;
    private array $data;

    public function __construct($data = [], $status = self::SUCCESS)
    {
        $this->data = $data;
        $this->status = $status;
    }

    public function Result()
    {
        return $this->data;
    }

    public function Status()
    {
        return $this->status;
    }

    public function IsOk()
    {
        return $this->status == self::SUCCESS;
    }
}