<?php

declare(strict_types=1);

namespace Meeting\Repository;

use Meeting\Collectioon\MeetingCollection;
use Meeting\Entity\Meeting;
use Meeting\Exception\MeetingNotFoundException;
use PDO;

final class MeetingRepository{

	private $pdo;

	public function __construct(PDO $pdo){
		$this->pdo = $pdo;
	}

	public function fetchAll() : MeetingCollection
	{
		$result = $this->pdo->query('SELECT id, titre, description, date_debut, date_fin FROM meeting');
		$meetings = [];
		while ($meeting = $result->fetch()){
			$meetings[] = new meeting($meeting['titre'],$meeting['description'],$meeting['date_debut'],$meeting['date_fin']);
		}

		return new MeetingCollection(...$meetings);

	}

}