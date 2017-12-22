<?php
/**
 * Created by PhpStorm.
 * User: MansourPC
 * Date: 22/12/2017
 * Time: 18:06
 */
declare(strict_types=1);

namespace Meeting\Collection;

use Meeting\Entity\Organisateur;
use ArrayIterator;
use Iterator;
use IteratorIterator;
class CollectionOrganisateur extends IteratorIterator implements Iterator
{

    public function __construct(Organisateur ...$organisateurs){
        parent::__construct(new ArrayIterator($organisateurs));
    }

    public function current() : ?Organisateur{
        return parent::current();
    }

}