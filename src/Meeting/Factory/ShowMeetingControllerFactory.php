<?php
/**
 * Created by PhpStorm.
 * User: MansourPC
 * Date: 22/12/2017
 * Time: 17:16
 */
declare(strict_types=1);

namespace Meeting\Factory;

use Meeting\Controller\ShowmeetingController;
use Meeting\Repository\MeetingRepository;
use Psr\Container\ContainerInterface;

final class ShowMeetingControllerFactory
{
    public function __invoke(ContainerInterface $container) : ShowMeetingController
    {
        $meetingRepository = $container->get(MeetingRepository::class);

        return new ShowMeetingController($meetingRepository);
    }
}