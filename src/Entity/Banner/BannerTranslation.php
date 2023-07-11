<?php

namespace App\Entity\Banner;

use Doctrine\ORM\Mapping as ORM;
use Odiseo\SyliusBannerPlugin\Entity\BannerTranslation as BaseBannerTranslation;

/**
 * @ORM\Entity()
 * @ORM\Table(name="odiseo_banner_translation")
 * @ORM\AttributeOverrides({
 *      @ORM\AttributeOverride(name="mobileImageName",
 *          column=@ORM\Column(
 *              name     = "mobile_image_name",
 *              type     = "string",
 *              nullable = true
 *          )
 *      )
 * })
 */
class BannerTranslation extends BaseBannerTranslation
{
}
