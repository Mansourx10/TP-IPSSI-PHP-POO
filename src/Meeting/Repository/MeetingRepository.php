<?php

declare(strict_types=1);

namespace Meeting\Repository;

use Meeting\Collection\CollectionOrganisateur;
use Meeting\Collection\MeetingCollection;
use Meeting\Entity\Meeting;
use Meeting\Entity\Organisateur;
use Meeting\Exception\MeetingNotFoundException;
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

    /**
     * @param string $name
     * @return CollectionOrganisateur
     */
    public function getOrganisateur(string $name) : CollectionOrganisateur
    {
        $statement = $this->pdo->prepare('SELECT u.id, u.nom, u.prenom FROM utilisateur as u INNER JOIN organisateur as o ON o.id_utilisateur = u.id WHERE o.id_meeting = :id_meeting');
        $statement->execute([':id_meeting' => $name]);
        $organizers = $statement->fetchall();
        if (!$organizers) {
            throw new MeetingNotFoundException();
        }
        $collection = [];
        foreach ($organizers as $organizer)
        {
            $collection[] = new Organisateur($organizer['nom'], $organizer['prenom']);
        }
        return new CollectionOrganisateur(...$collection);
    }

    public function getParticipant(){
        
    }


}