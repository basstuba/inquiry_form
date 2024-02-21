<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactsExport implements FromCollection,WithHeadings
{
    protected $contacts;

    public function __construct($contacts)
    {
        $this->contacts = $contacts;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        if ($this->contacts instanceof \Illuminate\Database\Eloquent\Collection) {
        return $this->contacts->map(function ($contact) {
            return [
                'last_name'    => $contact->last_name,
                'first_name'   => $contact->first_name,
                'gender'       => $contact->gender,
                'email'        => $contact->email,
                'tell'         => $contact->tell,
                'address'      => $contact->address,
                'building'     => $contact->building,
                'category_id'  => $contact->category_id,
                'datail'       => $contact->datail, // Correct column name
            ];
        });
    } elseif ($this->contacts instanceof \Illuminate\Database\Eloquent\Builder) {
        return $this->contacts->get()->map(function ($contact) {
            return [
                'last_name'    => $contact->last_name,
                'first_name'   => $contact->first_name,
                'gender'       => $contact->gender,
                'email'        => $contact->email,
                'tell'         => $contact->tell,
                'address'      => $contact->address,
                'building'     => $contact->building,
                'category_id'  => $contact->category_id,
                'datail'       => $contact->datail, // Correct column name
            ];
        });
    }

    return collect();
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
