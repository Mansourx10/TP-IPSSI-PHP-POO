<?php

declare(strict_types=1);

namespace Application\Entity;

final class Meeting {

	private $titre;
	private $description;
	private $date_debut;
	private $date_fin;

	public function __construct(string $titre, string $desc, date $date_debut, date $date_fin){
		$this->titre = $titre;
			$this->description = $desc;
				$this->date_debut = $date_debut;
					$this->date_fin = $date_fin;
	}

	public function getTitre(){
		return $this->titre;
	}
	public function getDesc(){
		return $this->description;
	}
	public function getdate_debut(){
			return $this->date_debut;
		}
	public function getdate_fin(){
			return $this->date_fin;
		}


}