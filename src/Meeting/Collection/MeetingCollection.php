<?php
declare(stric_types=1);

namespace Meeting\Collection;

use Meeting\Entity\Meeting;
use ArrayIterator;
use Iterator;
use IteratorIterator;

final class MeetingCollection extends IteratorIterator implements Iterator {


	public function __construct(Meeting ...$Meeetings){
		parent::__construct(new ArrayIterator($Meetings));
	}

	public function current() : ?Meeting{
		return parent::current();
	}
}