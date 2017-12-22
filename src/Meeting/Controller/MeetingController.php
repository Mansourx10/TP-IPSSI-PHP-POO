<?php
declare(strict_types=1);

namespace Meeting\Controller;

use Meeting\Repository\MeetingRepository;

final class MeetingController
{

	private $meetingRepository;

	public function __construct(MeetingRepository $meetingRepository)
	{
		$this->meetingRepository = $meetingRepository;
	}

	public function indexAction() : string
    {
		$Meetings = $this->meetingRepository->fetchAll();

		ob_start();
		include __DIR__.'/../../../views/meeting.phtml';
		return ob_get_clean().'';
	}

}
