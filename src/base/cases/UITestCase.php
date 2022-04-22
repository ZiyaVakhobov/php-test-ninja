<?php

namespace ziya\TestNinja\base\cases;

class UITestCase extends BaseCase
{
    /**
     * @param string $key
     */
    public function __construct(string $key)
    {
        $this->key = $key;
    }
    public function run()
    {
        echo "UI Test Case: {$this->key} running".PHP_EOL;
        parent::run();
        echo "UI Test Case: {$this->key} finished".PHP_EOL;
    }
}