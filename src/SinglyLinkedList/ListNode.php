<?php

declare(strict_types=1);

namespace thephilosoft\leetcode\lib\SinglyLinkedList;

final class ListNode
{
    public function __construct(
        public readonly int $val,
        public ?ListNode $next = null
    ) {
    }

    /** @param int[] $input */
    public static function fromArray(array $input): ?ListNode
    {
        $dummy = new self(666);
        $head = $dummy;
        foreach ($input as $number) {
            $head->next = new self($number);
            $head = $head->next;
        }

        return $dummy->next;
    }

    /** @return int[] */
    public function toArray(): array
    {
        $result = [];
        $h = $this;
        while ($h !== null) {
            $result[] = $h->val;
            $h = $h->next;
        }

        return $result;
    }
}
