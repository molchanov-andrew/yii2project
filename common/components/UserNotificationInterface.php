<?php

namespace common\components;

/**
 * @author andrew
 */
interface UserNotificationInterface {

    public function getEmail();

    public function getSubject();
}
