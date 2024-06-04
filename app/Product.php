<?php

namespace App;

use JsonSerializable;

class Product implements JsonSerializable
{
    private string $id;
    private string $name;
    private string $dateOfCreation;
    private ?string $lastUpdate;
    private int $units;

    public function __construct(string $id, string $name, string $dateOfCreation, ?string $lastUpdate, int $units)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dateOfCreation = $dateOfCreation;
        $this->lastUpdate = $lastUpdate;
        $this->units = $units;
    }

    public function getId(): string
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getDateOfCreation(): string
    {
        return $this->dateOfCreation;
    }
    public function getLastUpdate(): ?string
    {
        return $this->lastUpdate;
    }
    public function getUnits(): int
    {
        return $this->units;
    }
    public function addUnits(int $units): void
    {
        $this->units += $units;
    }
    public function withdrawUnits(int $units): void
    {
        $this->units =$this->units - $units;
    }
    public function update(string $date): void
    {
        $this->lastUpdate = $date;
    }
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'dateOfCreation' => $this->dateOfCreation,
            'lastUpdate' => $this->lastUpdate,
            'units' => $this->units,
        ];
    }
}
