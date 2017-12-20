<?php

declare(strict_types=1);

namespace Application\Factory;

use Controller\MeetingController;
use Repository\MeetingRepository;

class MeetingControllerFactory 
{
	public function __invoke(ContainerInterface $container) : MeetingController {

		return new MeetingController()
	}	
}