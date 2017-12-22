<?php

declare(strict_types=1);

namespace Meeting\Repository;

use Meeting\Collection\MeetingCollection;
use Meeting\Entity\Meeting;
use PDO;

final class MeetingRepository{

	private $pdo;

	public function __construct(PDO $pdo){
		$this->pdo = $pdo;
	}

	public function fetchAll() : MeetingCollection
	{
		$result = $this->pdo->query('SELECT id, titre, description, date_debut, date_fin FROM meetings');
		$meetings = [];
		while ($meeting = $result->fetch()){
			$meetings[] = new Meeting($meeting['titre'],$meeting['description'],$meeting['date_debut'],$meeting['date_fin']);
		}

		return new MeetingCollection(...$meetings);

	}

}