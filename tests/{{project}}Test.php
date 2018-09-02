<?php declare(strict_types=1);

namespace Liamja\{{project}}\Tests;

use Liamja\{{project}}\{{project}};

class {{project}}Test extends \PHPUnit\Framework\TestCase
{
    public function test{{project}}CanBeInstantiated(): void
    {
        $app = new {{project}}();

        $this->assertInstanceOf({{project}}::class, ${{project}});
    }
}
