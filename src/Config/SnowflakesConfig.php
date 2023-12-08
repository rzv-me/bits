<?php

namespace Glhd\Bits\Config;

use Illuminate\Support\Collection;
use Illuminate\Support\DateFactory;

class SnowflakesConfig extends GenericConfig
{
	public function __construct(DateFactory $date)
	{
		parent::__construct(
			precision: 3,
			unit: 1,
			segments: new Collection([
				Segment::id(label: 'pad', length: 1),
				Segment::timestamp(label: 'timestamp', length: 41),
				Segment::id(label: 'datacenter', length: 5),
				Segment::id(label: 'worker', length: 5),
				Segment::sequence(label: 'sequence', length: 12),
			]),
			date: $date,
		);
	}
}
