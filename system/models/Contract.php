<?php
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    public static function availableContractTypes()
    {
        return [
            'general' => __('General'),
            'nondisclosure_agreement' => __('Nondisclosure Agreement'),
            'partnership_agreement' => __('Partnership Agreement'),
            'indemnity_agreement' => __('Indemnity Agreement'),
            'property_and_equipment_lease' => __(
                'Property And Equipment Lease'
            ),
            'general_employment_contract' => __('General Employment Contract'),
            'licensing_agreement' => __('Licensing Agreement'),
            'bill_of_sale' => __('Bill of Sale'),
        ];
    }
}
