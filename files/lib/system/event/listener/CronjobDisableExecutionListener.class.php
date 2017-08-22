<?php

namespace wcf\system\event\listener;

use wcf\system\WCF;

/**
 * @author        {COPYRIGHT_AUTHOR}
 * @copyright     {COPYRIGHT_COMPANY}
 * @license       {COPYRIGHT_LICENSE}
 * @package       {COPYRIGHT_PACKAGE}
 * @category      {COPYRIGHT_CATEGORY}
 */
class CronjobDisableExecutionListener implements IParameterizedEventListener {
	/**
	 * @inheritDoc
	 */
	public function execute($eventObj, $className, $eventName, array &$parameters) {
		if (CRONJOB_EXECUTE) return;

		WCF::getTPL()->assign(array('executeCronjobs' => false));
	}
}
