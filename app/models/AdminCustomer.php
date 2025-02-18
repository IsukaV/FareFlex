<?php

class AdminCustomer extends Model{
    protected $table = "users";

    public function whereLike($data, $searchTerm)
{
    $keys = array_keys($data);
    $query = "SELECT * FROM " . $this->table . " WHERE role = 'user' AND (";

    if (!empty($keys) && !empty($searchTerm)) {
        foreach ($keys as $key) {
            // Construct the condition for case-insensitive and partial matching
            $query .= "LOWER(" . $key . ") LIKE '%" . strtolower($searchTerm) . "%' OR ";
        }
        $query = rtrim($query, "OR ") . ")";
    } else {
        // If no search term provided, return all records
        $query .= "1=1";
    }

    // Execute the query
    $res = $this->query($query);

    if (is_array($res)) {
        return $res;
    }
    return false;
    echo("No matching results found..");
}

}