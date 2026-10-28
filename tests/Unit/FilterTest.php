<?php

declare(strict_types=1);

namespace WonderWp\Component\Filter\Tests\Unit;

use PHPUnit\Framework\TestCase;
use WonderWp\Component\Filter\Filter;
use WonderWp\Component\Form\Field\InputField;

final class FilterTest extends TestCase
{
    public function testExtractValueFollowsAttributePath(): void
    {
        $field = new InputField('ignored', null);
        $filter = new Filter($field, 'user.name');
        $value = $filter->extractValue(['user' => ['name' => 'Ada']]);
        $this->assertSame('Ada', $value);
    }
}
