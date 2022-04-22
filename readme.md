# PHP Test Manager package

-----
## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require ziya/test-ninja
```

or add

```
"ziya/test-ninja": "*"
```

to the "require" section of your `composer.json` file.

------

## Configuration


## Usage

Send sms cron
```php

<?php

use ziya\TestNinja\base\actions\ActionInterface;
use ziya\TestNinja\base\actions\ActionResult;
use ziya\TestNinja\base\cases\UITestCase;

require_once './vendor/autoload.php';

class LoginCheck implements ActionInterface
{
    private ActionResult $previousResult;

    public function __construct(ActionResult $previousResult)
    {
        $this->previousResult = $previousResult;
    }

    public function key(): string
    {
        return 'Action Login';
    }

    public function execute(): ActionResult
    {
        echo "executed" . PHP_EOL;
        return new ActionResult();
    }
}

class DashboardCheck implements ActionInterface
{
    private ActionResult $previousResult;

    public function __construct(ActionResult $previousResult)
    {
        $this->previousResult = $previousResult;
    }

    public function key(): string
    {
        return 'Action Dashboard';
    }

    public function execute(): ActionResult
    {
        echo "executed" . PHP_EOL;
        return new ActionResult();
    }
}
class LogoutCheck implements ActionInterface
{
    private ActionResult $previousResult;

    public function __construct(ActionResult $previousResult)
    {
        $this->previousResult = $previousResult;
    }

    public function key(): string
    {
        return 'Action Logout';
    }

    public function execute(): ActionResult
    {
        echo "executed" . PHP_EOL;
        return new ActionResult();
    }
}

$uitest = new UITestCase('Test Case Login');
$uitest->add(LoginCheck::class);
$uitest->add(DashboardCheck::class);
$uitest->add(LogoutCheck::class);
$uitest->run();
?>
```


Running test
```
php index.php
Output:
UI Test Case: Test Case Login running
Running Action Action Login 
executed
Running Action Action Dashboard 
executed
Running Action Action Logout 
executed
UI Test Case: Test Case Login finished
```