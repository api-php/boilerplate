<?php

/*
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace FAPI\Boilerplate\Exception\Domain;

use FAPI\Boilerplate\Exception\DomainException;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class NotFoundException extends \Exception implements DomainException
{
}
