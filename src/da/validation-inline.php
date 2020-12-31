<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Dette felt skal accepteres.',
    'active_url'           => 'Dette er ikke et valid URL.',
    'after'                => 'Dette skal være en dato efter :date.',
    'after_or_equal'       => 'Dette skal være en dato efter eller samme som :date.',
    'alpha'                => 'Dette felt må kun indeholde bogstaver.',
    'alpha_dash'           => 'Dette felt må kun indeholde bogstaver, tal, bindestreger og understreger.',
    'alpha_num'            => 'Dette felt må kun indeholde bogstaver og tal.',
    'array'                => 'Dette felt skal være et array.',
    'before'               => 'Dette skal være en dato før :date.',
    'before_or_equal'      => 'Dette skal være en dato før eller samme som :date.',
    'between'              => [
        'numeric' => 'Denne værdi skal være mellem :min og :max.',
        'file'    => 'Denne fil skal være mellem :min og :max kilobytes.',
        'string'  => 'Denne streng skal være mellem :min og :max bogstaver.',
        'array'   => 'Dette indhold skal have mellem :min og :max genstande.',
    ],
    'boolean'              => 'Dette felt skal være sandt eller falsk.',
    'confirmed'            => 'Bekræftelsen matcher ikke.',
    'date'                 => 'Dette er ikke en valid dato.',
    'date_equals'          => 'Dette skal være en dato lig med :date.',
    'date_format'          => 'Dette passer ikke med formattet :format.',
    'different'            => 'Denne værdi skal være en anden end :other.',
    'digits'               => 'Dette skal være :digits cifre.',
    'digits_between'       => 'Dette skal være mellem :min og :max cifre.',
    'dimensions'           => 'Dette billede har ikke valide dimensioner.',
    'distinct'             => 'Dette felts værdi har en duplikant.',
    'email'                => 'Dette skal være en valid email adresse.',
    'ends_with'            => 'Dette skal ende med en af følgende: :values.',
    'exists'               => 'Den valgte værdi er ikke valid.',
    'file'                 => 'Indeholdet skal være en fil.',
    'filled'               => 'Dette felt skal have en værdi.',
    'gt'                   => [
        'numeric' => 'Værdien skal være større end :value.',
        'file'    => 'Filstørrelsen skal være større end :value kilobytes.',
        'string'  => 'Strengen skal være længere end :value bogstaver.',
        'array'   => 'Indholdet skal have mere end :value genstande.',
    ],
    'gte'                  => [
        'numeric' => 'Værdien skal være større end eller lig med :value.',
        'file'    => 'Filstørrelsen skal være større end eller lig med :value kilobytes.',
        'string'  => 'Strengen skal være længere end eller lig med :value bogstaver.',
        'array'   => 'Indholdet skal have :value genstande eller flere.',
    ],
    'image'                => 'Dette skal være et billede.',
    'in'                   => 'Den valgte værdi er ikke valid.',
    'in_array'             => 'Denne værdi findes ikke i :other.',
    'integer'              => 'Dette skal være et helt tal.',
    'ip'                   => 'Dette skal være en valid IP adresse.',
    'ipv4'                 => 'Dette skal være en valid IPv4 adresse.',
    'ipv6'                 => 'Dette skal være en valid IPv6 adresse.',
    'json'                 => 'Dette skal være en valid JSON streng.',
    'lt'                   => [
        'numeric' => 'Værdien skal være mindre end :value.',
        'file'    => 'Filstørrelsen skal være mindre end :value kilobytes.',
        'string'  => 'Strengen skal være mindre end :value bogstaver.',
        'array'   => 'Indholdet skal have færre end :value genstande.',
    ],
    'lte'                  => [
        'numeric' => 'Værdien skal være mindre end eller lig med :value.',
        'file'    => 'Filstørrelsen skal være mindre end eller lig med :value kilobytes.',
        'string'  => 'Strengen skal være mindre end eller lig med :value bogstaver.',
        'array'   => 'Indholdet må ikke have flere end :value genstande.',
    ],
    'max'                  => [
        'numeric' => 'The value may not be greater than :max.',
        'file'    => 'The file size may not be greater than :max kilobytes.',
        'string'  => 'The string may not be greater than :max characters.',
        'array'   => 'The content may not have more than :max items.',
    ],
    'mimes'                => 'This must be a file of type: :values.',
    'mimetypes'            => 'This must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The value must be at least :min.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'string'  => 'The string must be at least :min characters.',
        'array'   => 'The value must have at least :min items.',
    ],
    'multiple_of'          => 'The value must be a multiple of :value',
    'not_in'               => 'The selected value is invalid.',
    'not_regex'            => 'This format is invalid.',
    'numeric'              => 'This must be a number.',
    'password'             => 'The password is incorrect.',
    'present'              => 'This field must be present.',
    'regex'                => 'This format is invalid.',
    'required'             => 'This field is required.',
    'required_if'          => 'This field is required when :other is :value.',
    'required_unless'      => 'This field is required unless :other is in :values.',
    'required_with'        => 'This field is required when :values is present.',
    'required_with_all'    => 'This field is required when :values are present.',
    'required_without'     => 'This field is required when :values is not present.',
    'required_without_all' => 'This field is required when none of :values are present.',
    'same'                 => 'The value of this field must match the one from :other.',
    'size'                 => [
        'numeric' => 'The value must be :size.',
        'file'    => 'The file size must be :size kilobytes.',
        'string'  => 'The string must be :size characters.',
        'array'   => 'The content must contain :size items.',
    ],
    'starts_with'          => 'This must start with one of the following: :values.',
    'string'               => 'This must be a string.',
    'timezone'             => 'This must be a valid zone.',
    'unique'               => 'This has already been taken.',
    'uploaded'             => 'This failed to upload.',
    'url'                  => 'This format is invalid.',
    'uuid'                 => 'This must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

];
