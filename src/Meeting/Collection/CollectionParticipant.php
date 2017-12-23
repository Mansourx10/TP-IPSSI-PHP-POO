<?php
/**
 * Created by PhpStorm.
 * User: MansourPC
 * Date: 22/12/2017
 * Time: 23:45
 */

declare(strict_types=1);

namespace Meeting\Collection;

use Meeting\Entity\Participant;
use ArrayIterator;
use Iterator;
use IteratorIterator;

class CollectionParticipant extends IteratorIterator implements Iterator
{

    public function __construct(Participant ...$participants)
    {
        parent::__construct(new ArrayIterator($participants));
    }

    public function current() : ?Participant{
        return parent::current();
    }


}