<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Contact::select(
            'last_name',
            'first_name',
            'gender',
            'email',
            'tell',
            'address',
            'building',
            'category_id',
            'datail'
        )->get();
    }

    public function headings():array
    {
        return [
            'last_name',
            'first_name',
            'gender',
            'email',
            'tell',
            'address',
            'building',
            'category_id',
            'datail'
        ];
    }
}
