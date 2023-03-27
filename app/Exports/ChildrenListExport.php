<?php 

namespace App\Exports;
use App\Models\Children;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class ChildrenListExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	
	protected $query;
	
    public function __construct($query)
    {
        $this->query = $query->select(Children::exportListFields());
    }
	
    public function query()
    {
        return $this->query;
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
			'Marital Status Id',
			'Marital Status Diagnosis',
			'Marital Status Solution',
			'Marital Status Cost',
			'Medical Status Diagnosis',
			'Medical Status Solution',
			'Medical Status Cost',
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
			$record->marital_status_id,
			$record->marital_status_diagnosis,
			$record->marital_status_solution,
			$record->marital_status_cost,
			$record->medical_status_diagnosis,
			$record->medical_status_solution,
			$record->medical_status_cost,
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
