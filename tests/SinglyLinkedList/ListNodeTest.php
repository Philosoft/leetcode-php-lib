<?php

declare(strict_types=1);

namespace tests\SinglyLinkedList;

use PHPUnit\Framework\TestCase;
use thephilosoft\leetcode\lib\SinglyLinkedList\ListNode;

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

    public function testCreationFromArray(): void
    {
        self::assertNull(ListNode::fromArray([]));

        $head = ListNode::fromArray([1]);
        self::assertNotNull($head);
        self::assertSame(1, $head->val);
        self::assertNull($head->next);

        $head = ListNode::fromArray([1, 2]);
        self::assertNotNull($head);
        self::assertSame(1, $head->val);
        self::assertNotNull($head->next);
        self::assertSame(2, $head->next->val);
        self::assertNull($head->next->next);
    }

    public function testToArray(): void
    {
        self::assertSame([1, 2, 3], ListNode::fromArray([1, 2, 3])?->toArray());

        $head = ListNode::fromArray([1, 2, 3]);

        self::assertSame([2, 3], $head->next?->toArray());
        self::assertSame([3], $head->next->next?->toArray());
    }
}
