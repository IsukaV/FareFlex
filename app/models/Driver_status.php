<?php 

/**
 * users model
 */
class Driver_status extends Model
{
	
	public $errors = [];
	protected $table = "driver_status";

	protected $allowedColumns = [
        'driver_id',
        'vehicle',
		'lat',
        'lng',
		'status',

	];

    public function validate($data)
	{
		
	}
   
}