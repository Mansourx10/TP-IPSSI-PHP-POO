<?php
/**
 * Created by PhpStorm.
 * User: MansourPC
 * Date: 22/12/2017
 * Time: 17:03
 */

namespace Meeting\Controller;

use Application\Controller\ErrorController;
use Meeting\Exception\MeetingNotFoundException;
use Meeting\Repository\MeetingRepository;

class ShowMeetingController
{
    /**
     * @var MeetingRepository
     */
    private $meetingRepository;

    public function __construct(MeetingRepository $meetingRepository)
    {
        $this->meetingRepository = $meetingRepository;
    }

    public function indexAction() : string
    {
        try {
            $meeting = $this->meetingRepository->getOrganisateur($_GET['name'] ?? '');

            ob_start();
            include __DIR__.'/../../../views/meeting-details.phtml';
            return ob_get_clean();
        } catch (MeetingNotFoundException $exception) {
            return (new ErrorController($exception))->error404Action();
        }
    }
}