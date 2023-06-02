<?php
namespace AgTrader\HeroImage\Api\Data;

interface HerosInterface
{
    public const ENTITY_ID = 'entity_id';
    public const NAME = 'name';
    public const URL = 'url';
    public const DESCRIPTION = 'description';
    
    public function getId();

    public function setId($id);

    public function getHeroName();

    public function setHeroName($HeroName);

    public function getUrl();

    public function setUrl($url);

    public function getDescription();

    public function setDescription($description);

    
}
