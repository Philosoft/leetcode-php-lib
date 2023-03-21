<?php

declare(strict_types=1);

namespace tests\SinglyLinkedList;

use PHPUnit\Framework\TestCase;
use thephilosoft\SinglyLinkedList\ListNode;

class ListNodeTest extends TestCase
{
    public function testConstructor(): void
    {
        $obj = new ListNode(1);
        self::assertSame(1, $obj->val);
        self::assertNull($obj->next);

        $obj->next = new ListNode(2);
        self::assertNotNull($obj->next);
        self::assertSame(2, $obj->next->val);

        $three = new ListNode(3, new ListNode(4));
        self::assertSame(3, $three->val);
        self::assertNotNull($three->next);
        self::assertSame(4, $three->next->val);
    }
}
