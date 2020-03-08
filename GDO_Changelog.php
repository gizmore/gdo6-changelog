<?php
namespace GDO\Changelog;

use GDO\Core\GDO;
use GDO\DB\GDT_AutoInc;
use GDO\DB\GDT_Name;
use GDO\DB\GDT_Enum;
use GDO\DB\GDT_String;
use GDO\DB\GDT_Text;
use GDO\Core\GDT_Serialize;

final class GDO_Changelog extends GDO
{
	public function gdoColumns()
	{
		return array(
			GDT_Name::make('cl_table')->notNull()->primary(),
			GDT_Name::make('cl_column')->notNull()->primary(),
			GDT_Text::make('cl_old_value'),
			GDT_Text::make('cl_new_value'),
		);
	}
	
}
