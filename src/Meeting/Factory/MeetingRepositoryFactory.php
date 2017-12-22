<?php

declare(strict_types=1);

namespace Meeting\Factory;

use Meeting\Repository\MeetingRepository;
use Psr\Container\ContainerInterface;
use PDO;

final class MeetingRepositoryFactory
{
    public function __invoke(ContainerInterface $container) : MeetingRepository
    {
        return new MeetingRepository($container->get(PDO::class));
    }
}
