<?php

declare(strict_types=1);

namespace thephilosoft\SinglyLinkedList;

final class ListNode
{
    public function __construct(
        public readonly int $val,
        public ?ListNode $next = null
    ) {
    }
}
