<?php

namespace ziya\TestNinja\base\actions;

interface ActionInterface
{
    public function __construct(ActionResult $previousResult);
    public function key():string;
    public function execute(): ActionResult;
}