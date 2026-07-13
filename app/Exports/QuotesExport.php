<?php

namespace App\Exports;

use App\Models\Quote;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class QuotesExport implements FromCollection, WithHeadings
{
    protected $quote;

    public function __construct($quote)
    {
        $this->quote = $quote;
    }

    /**
     * Return a collection with data structured vertically.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = [];

        // Static fields (single values)
        $data[] = ['ID', $this->quote->id];
        $data[] = ['Title', $this->quote->title];
        $data[] = ['Name', $this->quote->name];
        $data[] = ['Country Code', $this->quote->country_code];
        $data[] = ['Contact', $this->quote->contact];
        $data[] = ['Email', $this->quote->email];
        $data[] = ['Address', $this->quote->address];
        $data[] = ['City', $this->quote->city];
        $data[] = ['Postal Code', $this->quote->postal_code];
        $data[] = ['Service', $this->quote->service];
        $data[] = ['Loan', $this->quote->loan];

        // Additional dynamic fields from 'additional_details'
        $additionalDetails = $this->quote->additional_details;

        if (is_array($additionalDetails)) {
            foreach ($additionalDetails as $key => $value) {
                if (is_array($value)) {
                    // If the value is an array, create multiple rows under the same field
                    $firstRow = true;
                    foreach ($value as $item) {
                        if (!empty($item)) { // Skip null or empty values
                            if ($firstRow) {
                                $data[] = [$key, $item]; // First row with field name
                                $firstRow = false;
                            } else {
                                $data[] = ["", $item]; // Subsequent rows with empty field name
                            }
                        }
                    }
                } else {
                    $data[] = [$key, $value]; // Normal key-value pair
                }
            }
        }

        // Additional static fields
        $data[] = ['Created At', $this->quote->created_at];
        $data[] = ['Updated At', $this->quote->updated_at];

        return collect($data);
    }


    /**
     * Define the vertical heading for each row.
     *
     * @return array
     */
    public function headings(): array
    {
        return ['Field', 'Value'];
    }
}
