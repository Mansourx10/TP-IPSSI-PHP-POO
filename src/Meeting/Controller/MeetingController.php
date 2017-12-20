<?php
declare(strict_types=1);

namespace Application\Controller;

use Application\Repository\MeetingRepository;

final class MeetingController
{
	private $MeetingRepository;

	public function __construct(MeetingRepository $MeetingRepository)
	{
		$this->MeetingRepository = $MeetingRepository;
	}

	public function indexAction() : string{
		$Meeting = $this->MeetingRepository->fetchAll();

		ob_start();
		include __DIR__.'/../../views/meeting.phtml';
		return ob_clean();
	}

}
