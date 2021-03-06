<?php
/**
Copyright 2011-2013 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once(ROOT_DIR . 'lib/Config/namespace.php');
require_once(ROOT_DIR . 'lib/Common/namespace.php');
require_once(ROOT_DIR . 'lib/Database/namespace.php');
require_once(ROOT_DIR . 'lib/Database/Commands/namespace.php');

require_once(ROOT_DIR . 'Controls/Dashboard/AnnouncementsControl.php');
require_once(ROOT_DIR . 'Controls/Dashboard/UpcomingReservations.php');

class DashboardPresenter
{
	private $_page;
	
	public function __construct(IDashboardPage $page)
	{
		$this->_page = $page;
	}
	
	public function Initialize()
	{
		$announcement = new AnnouncementsControl(new SmartyPage());
		$upcomingReservations = new UpcomingReservations(new SmartyPage());

		$this->_page->AddItem($announcement);
		$this->_page->AddItem($upcomingReservations);
	}
}
?>