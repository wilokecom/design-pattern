<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "InterfaceObserver.php";
require_once "InterfaceSubject.php";
require_once "NotificationObserver.php";
require_once "EmailObserver.php";
require_once "PostSubject.php";

$oSubject = new PostSubject();

// Observer
$oEmailObserver = new EmailObserver();
$oNotificationObserver = new NotificationObserver();

// Client
$oSubject->attach($oEmailObserver);
$oSubject->attach($oNotificationObserver);

$oSubject->setContent("This is new content");
$oSubject->notify();
