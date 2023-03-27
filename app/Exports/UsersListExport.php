<?php 

namespace App\Exports;
use App\Models\Users;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class UsersListExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	
	protected $query;
	
    public function __construct($query)
    {
        $this->query = $query->select(Users::exportListFields());
    }
	
    public function query()
    {
        return $this->query;
    }
	
	public function headings(): array
    {
        return [
			'Id',
			'Username',
			'Email',
			'Image',
			'Phone'
        ];
    }
	
    public function map($record): array
    {
        return [
			$record->id,
			$record->username,
			$record->email,
			$record->image,
			$record->phone
        ];
    }
}
