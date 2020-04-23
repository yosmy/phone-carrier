<?php

namespace Yosmy\Phone;

use Exception;

/**
 * @di\service()
 */
class BaseNonexistentCarrierException extends Exception implements NonexistentCarrierException
{}