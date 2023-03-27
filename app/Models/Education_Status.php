<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Education_Status extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'education_status';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'diagnosis','solution','cost','children_id','remaining','date'
	];
	public $timestamps = false;
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				diagnosis LIKE ?  OR 
				solution LIKE ?  OR 
				children_id LIKE ?  OR 
				remaining LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"id",
			"diagnosis",
			"solution",
			"cost",
			"children_id",
			"remaining",
			"date" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id",
			"diagnosis",
			"solution",
			"cost",
			"children_id",
			"remaining",
			"date" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id",
			"diagnosis",
			"solution",
			"cost",
			"children_id",
			"remaining",
			"date" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id",
			"diagnosis",
			"solution",
			"cost",
			"children_id",
			"remaining",
			"date" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"diagnosis",
			"solution",
			"cost",
			"children_id",
			"remaining",
			"date",
			"id" 
		];
	}
}
