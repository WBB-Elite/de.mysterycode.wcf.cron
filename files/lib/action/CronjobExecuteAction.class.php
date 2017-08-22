<?php

namespace wcf\action;
use wcf\data\cronjob\CronjobAction;

/**
 * @author        {COPYRIGHT_AUTHOR}
 * @copyright     {COPYRIGHT_COMPANY}
 * @license       {COPYRIGHT_LICENSE}
 * @package       {COPYRIGHT_PACKAGE}
 * @category      {COPYRIGHT_CATEGORY}
 */
class CronjobExecuteAction extends AbstractAction {
	/**
	 * @inheritDoc
	 */
	public function execute() {
		$action = new CronjobAction([], 'executeCronjobs');
		$action->executeAction();
	}
}
