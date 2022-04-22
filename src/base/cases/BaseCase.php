<?php

namespace ziya\TestNinja\base\cases;

use ziya\TestNinja\base\actions\ActionInterface;
use ziya\TestNinja\base\actions\ActionResult;

abstract class BaseCase
{
    protected string $key;
    /**
     * @var string[]
     */
    protected array $actions;

    /**
     * @param string $action
     * @return void
     * @throws \Exception
     */
    public function add(string $action)
    {
        if (!(new $action(new ActionResult()) instanceof ActionInterface)) {
            throw new \Exception("Action should be instance of ActionInterface");
        }
        $this->actions[] = $action;
    }

    public function run()
    {
        $previous = new ActionResult();
        foreach ($this->actions as $actionStr) {
            /**
             * @var ActionInterface $action
             */
            $action = new $actionStr($previous);
            echo "Running Action {$action->key()} " . PHP_EOL;
            $previous = $action->execute();
        }
    }
}