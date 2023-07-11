<?php

namespace App\Entity\Banner;

use Doctrine\ORM\Mapping as ORM;
use Odiseo\SyliusBannerPlugin\Entity\Banner as BaseBanner;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 * @ORM\Table(name="odiseo_banner")
 */
class Banner extends BaseBanner
{
    /**
     * @ORM\Column(type="smallint")
     * @Assert\NotBlank(groups={"odiseo"})
     * @Assert\Positive(groups={"odiseo"})
     */
    private $position;

    public function __construct()
    {
        parent::__construct();

        $this->code = Uuid::uuid4()->__toString();
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position)
    {
        $this->position = $position;

        return $this;
    }
}
