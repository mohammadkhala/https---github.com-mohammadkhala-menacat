<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Children extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'children';
	

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
		'name','date_of_birth','address','gender','image','class'
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
				children.class LIKE ?  OR 
				children.gender LIKE ?  OR 
				children.address LIKE ?  OR 
				children.name LIKE ?  OR 
				marital_status.diagnosis LIKE ?  OR 
				marital_status.solution LIKE ?  OR 
				marital_status.cost LIKE ?  OR 
				medical_status.diagnosis LIKE ?  OR 
				medical_status.solution LIKE ?  OR 
				medical_status.children_id LIKE ?  OR 
				medical_status.date LIKE ?  OR 
				education_status.diagnosis LIKE ?  OR 
				education_status.solution LIKE ?  OR 
				education_status.children_id LIKE ?  OR 
				education_status.remaining LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"children.class AS class",
			"children.image AS image",
			"children.gender AS gender",
			"children.address AS address",
			"children.date_of_birth AS date_of_birth",
			"children.name AS name",
			"children.id AS id",
			"marital_status.id AS marital_status_id",
			"medical_status.id AS medical_status_id",
			"education_status.id AS education_status_id" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"children.class AS class",
			"children.image AS image",
			"children.gender AS gender",
			"children.address AS address",
			"children.date_of_birth AS date_of_birth",
			"children.name AS name",
			"children.id AS id",
			"marital_status.id AS marital_status_id",
			"medical_status.id AS medical_status_id",
			"education_status.id AS education_status_id" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"children.id AS id",
			"children.name AS name",
			"children.image AS image",
			"children.date_of_birth AS date_of_birth",
			"children.address AS address",
			"children.gender AS gender",
			"children.class AS class",
			"marital_status.id AS marital_status_id",
			"marital_status.diagnosis AS marital_status_diagnosis",
			"marital_status.solution AS marital_status_solution",
			"marital_status.cost AS marital_status_cost",
			"marital_status.children_id AS marital_status_children_id",
			"marital_status.remaining AS marital_status_remaining",
			"marital_status.date AS marital_status_date",
			"medical_status.id AS medical_status_id",
			"medical_status.diagnosis AS medical_status_diagnosis",
			"medical_status.solution AS medical_status_solution",
			"medical_status.cost AS medical_status_cost",
			"medical_status.children_id AS medical_status_children_id",
			"medical_status.remaining AS medical_status_remaining",
			"medical_status.date AS medical_status_date",
			"education_status.id AS education_status_id",
			"education_status.diagnosis AS education_status_diagnosis",
			"education_status.solution AS education_status_solution",
			"education_status.cost AS education_status_cost",
			"education_status.children_id AS education_status_children_id",
			"education_status.remaining AS education_status_remaining",
			"education_status.date AS education_status_date" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"children.id AS id",
			"children.name AS name",
			"children.image AS image",
			"children.date_of_birth AS date_of_birth",
			"children.address AS address",
			"children.gender AS gender",
			"children.class AS class",
			"marital_status.id AS marital_status_id",
			"marital_status.diagnosis AS marital_status_diagnosis",
			"marital_status.solution AS marital_status_solution",
			"marital_status.cost AS marital_status_cost",
			"marital_status.children_id AS marital_status_children_id",
			"marital_status.remaining AS marital_status_remaining",
			"marital_status.date AS marital_status_date",
			"medical_status.id AS medical_status_id",
			"medical_status.diagnosis AS medical_status_diagnosis",
			"medical_status.solution AS medical_status_solution",
			"medical_status.cost AS medical_status_cost",
			"medical_status.children_id AS medical_status_children_id",
			"medical_status.remaining AS medical_status_remaining",
			"medical_status.date AS medical_status_date",
			"education_status.id AS education_status_id",
			"education_status.diagnosis AS education_status_diagnosis",
			"education_status.solution AS education_status_solution",
			"education_status.cost AS education_status_cost",
			"education_status.children_id AS education_status_children_id",
			"education_status.remaining AS education_status_remaining",
			"education_status.date AS education_status_date" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"name",
			"date_of_birth",
			"address",
			"gender",
			"image",
			"class",
			"id" 
		];
	}
}
