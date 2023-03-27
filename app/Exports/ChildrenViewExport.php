<?php 

namespace App\Exports;
use App\Models\Children;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class ChildrenViewExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	protected $query;

	protected $rec_id;

    public function __construct($query, $rec_id)
    {
        $this->query = $query->select(Children::exportViewFields());
        $this->rec_id = $rec_id;
    }


    public function query()
    {
        return $this->query->where("id", $this->rec_id);
    }


	public function headings(): array
    {
        return [
			'Id',
			'Name',
			'Date Of Birth',
			'Address',
			'Gender',
			'Image',
			'Medical Status Id',
			'Medical Status Diagnosis',
			'Medical Status Solution',
			'Medical Status Cost',
			'Medical Status Children Id',
			'Education Status Children Id',
			'Education Status Id',
			'Education Status Diagnosis',
			'Education Status Solution',
			'Education Status Cost',
			'Marital Status Remaining',
			'Medical Status Remaining',
			'Education Status Remaining',
			'Class',
			'Marital Status Date',
			'Medical Status Date',
			'Education Status Date'
        ];
    }


    public function map($record): array
    {
        return [
			$record->id,
			$record->name,
			$record->date_of_birth,
			$record->address,
			$record->gender,
			$record->image,
			$record->medical_status_id,
			$record->medical_status_diagnosis,
			$record->medical_status_solution,
			$record->medical_status_cost,
			$record->medical_status_children_id,
			$record->education_status_children_id,
			$record->education_status_id,
			$record->education_status_diagnosis,
			$record->education_status_solution,
			$record->education_status_cost,
			$record->marital_status_remaining,
			$record->medical_status_remaining,
			$record->education_status_remaining,
			$record->class,
			$record->marital_status_date,
			$record->medical_status_date,
			$record->education_status_date
        ];
    }
}
