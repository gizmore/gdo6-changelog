<?php
namespace GDO\Changelog;

use GDO\Core\GDO_Module;

final class Module_Changelog extends GDO_Module
{
	public function getClasses()
	{
		return array(
			"GDO\\Changelog\\GDO_Changelog",
		);
	}
}
