<?php

declare(strict_types=1);

namespace Application\Repository;

use Application\Collectioon\MeetingCollection;
use Application\Entity\Meeting;
use Application\Exception\FilmNotFoundException;
use PDO;

final class MeetingRepository{

	private $pdo;

	public function __construct(pdo $pdo){
		$this->pdo = $pdo;
	}

	public function fetchAll(){
		$result = $this->pdo->query('select * from meeting');
		$meetings = [];
		while ($meeting = $result->fetch()){
			$meetings = new meeting($meeting['titre'],$meeting['description'],$meeting['date_debut'],$meeting['date_fin']);
		}

		return new MeetingCollection(...$meetings);

	}

}