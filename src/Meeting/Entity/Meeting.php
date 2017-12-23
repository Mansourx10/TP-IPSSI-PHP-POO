<?php

declare(strict_types=1);

namespace Meeting\Entity;

final class Meeting {

    private $id;

	private $titre;
	private $description;
	private $date_debut;
	private $date_fin;

	public function __construct(int $id, string $titre, string $desc, string $date_debut, string $date_fin){
		$this->id = $id;
	    $this->titre = $titre;
			$this->description = $desc;
				$this->date_debut = $date_debut;
					$this->date_fin = $date_fin;
	}

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

	public function getTitre()
	{
		return $this->titre;
	}

	public function getDesc()
	{
		return $this->description;
	}

	public function getDate_debut()
	{
			return $this->date_debut;
	}

	public function getDate_fin()
	{
			return $this->date_fin;
	}


}