<?php

declare(strict_types=1);

namespace App\Entity\Order;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Sylius\Component\Core\Model\Image;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Entity
 * @Table(name="sylius_order_image")
 */
class OrderImage extends Image
{
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Order\Order", cascade={"all"}, inversedBy="image")
     */
    protected $owner;

    /**
     * @Assert\File(maxSize="4096k", groups={"sylius"}, mimeTypes={
     *      "application/pdf",
     *      "application/x-pdf",
     *      "image/jpg",
     *      "image/jpeg",
     *      "image/png",
     *      "image/gif",
     * })
     */
    protected $file;
}
