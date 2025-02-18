<?php 

/**
 * users model
 */
class Add_Place extends Model
{
	
	public $errors = [];
	protected $table = "addplace";

	protected $allowedColumns = [
        'id',
        'passenger_id',
		'name',
		'category',
		'location',
        'lat',
        'lng',
		'date',
        'icon',
	];

    public function validate($data)
	{
		$this->errors = [];

        if (!preg_match("/^[a-zA-Z\s]*$/", trim($data['name']))) {
            $this->errors['name'] = "name can only have letters.";
        }elseif ($this->where(['passenger_id' => $_SESSION['USER_DATA']->id,'name'=> $data['name']])) {

            $this->errors['name'] = "name already exist.";
        }elseif (empty($data['name'])) {
			$this->errors['name'] = "Please enter place name";
        }

        if (empty($data['address']) && empty($data['lat'])) {
			$this->errors['address'] = "please point the map";
        }
        

        if (empty($data['category'])) {
			$this->errors['category'] = "please select the category .";
        }

        

        if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
    public function fit_icon($data){
        $this->icon='';
        if($data['category']=="Home"){
            $this->icon= "fa-solid fa-house";
        }elseif($data["category"]== "Food & Drink"){
            $this->icon= "fa-solid fa-utensils";
        }else if($data['category']=="Shopping"){
            $this->icon= "fa-solid fa-bag-shopping";
        }elseif($data["category"]== "Education"){
            $this->icon= "fa-solid fa-graduation-cap";
        }else if($data['category']=="Religion"){
            $this->icon= "fa-solid fa-hands-praying";
        }elseif($data["category"]== "Hotels & lodging"){
            $this->icon= "fa-solid fa-hotel";
        }else if($data['category']=="Hospital"){
            $this->icon= "fa-solid fa-hospital";
        }elseif($data["category"]== "Bank"){
            $this->icon= "fa-solid fa-building-columns";
        }else if($data['category']=="Office"){
            $this->icon= "fa-solid fa-briefcase";
        }elseif($data["category"]== "Other"){
            $this->icon= "fa-solid fa-globe";
        }
       
    }
    public function delete_addplace($id = null)
    {
        $query = "delete from $this->table where id = :id;";

        return $this->query($query,['id' => $id]);
    }

    public function update_addplace($id, $data)
    {
        $query = $this->update1($id, $data);
        return $query;
        
    }
    //---------------------------------------
    public function update1($id, $data)
	{
		if (!empty($this->allowedColumns)) {
			foreach ($data as $key => $value) {
				if (!in_array($key, $this->allowedColumns)) {
					unset($data[$key]);
				}
			}
		}

		$keys = array_keys($data);
		// $id = array_search($id, $data);

		$query = "update " . $this->table . " set ";
		foreach ($keys as $key) {
			$query .= $key . "=:" . $key . ",";
		}
		$query = trim($query, ",");
		$query .= " where id = :id";
		print_r($query);	


		$this->query($query, $data);
	}

}