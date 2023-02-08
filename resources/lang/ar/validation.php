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

    'accepted' => 'يجب قبول  :attribute',
    'active_url' => ' :attribute لا يُمثّل رابطًا صحيحًا',
    'after' => 'يجب على  :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'يجب أن لا يحتوي  :attribute سوى على حروف',
    'alpha_dash' => 'يجب أن لا يحتوي  :attribute على حروف، أرقام ومطّات.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array' => 'يجب أن يكون  :attribute ًمصفوفة',
    'before' => 'يجب على  :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',
        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',
    ],
    'boolean' => 'يجب أن تكون قيمة  :attribute إما true أو false ',
    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'date' => ' :attribute ليس تاريخًا صحيحًا',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'لا يتوافق  :attribute مع الشكل :format.',
    'different' => 'يجب أن يكون ان :attribute و :other مُختلفان',
    'digits' => 'يجب أن يحتوي  :attribute على :digits رقمًا/أرقام',
    'digits_between' => 'يجب أن يحتوي  :attribute ما بين :min و :max رقمًا/أرقام ',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'للحقل :attribute قيمة مُكرّرة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
    'ends_with' => 'The :attribute must end with one of the following: :values',
    'exists' => ' :attribute لاغٍ',
    'file' => 'The :attribute must be a file.',
    'filled' => ' :attribute إجباري',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'يجب أن يكون  :attribute صورةً',
    'in' => ' :attribute لاغٍ',
    'in_array' => ' :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون  :attribute عددًا صحيحًا',
    'ip' => 'يجب أن يكون  :attribute عنوان IP ذي بُنية صحيحة',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'يجب أن يكون  :attribute نصآ من نوع JSON.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'يجب أن تكون قيمة  :attribute أصغر من :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',
        'array' => 'يجب أن لا يحتوي  :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes' => 'يجب أن يكون  ملفًا من نوع : :values.',
    'min' => [
        'numeric' => 'يجب أن تكون قيمة  :attribute أكبر من :min.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',
        'string' => 'يجب أن يكون طول النص :attribute أكبر من :min حروفٍ/حرفًا',
        'array' => 'يجب أن يحتوي  :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in' => ' :attribute لاغٍ',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'يجب على  :attribute أن يكون رقمًا',
    'present' => 'The :attribute field must be present.',
    'regex' => 'صيغة  :attribute .غير صحيحة',
    'required' => ' :attribute مطلوب.',
    'required_if' => ' :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless' => ' :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with' => ' :attribute إذا توفّر :values.',
    'required_with_all' => ' :attribute إذا توفّر :values.',
    'required_without' => ' :attribute إذا لم يتوفّر :values.',
    'required_without_all' => ' :attribute إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق  :attribute مع :other',
    'size' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',
        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',
        'array' => 'يجب أن يحتوي  :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'يجب أن يكون  :attribute نصآ.',
    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique' => 'قيمة  :attribute مُستخدمة من قبل',
    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'uuid' => 'The :attribute must be a valid UUID.',

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

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'الأسم',
        'email' => 'البريد الإلكترونى',
        'phone' => 'رقم الهاتف',
        'message' => 'الرسالة',
        'photo' => 'الصورة',
        'funding_title' => 'العنوان',
        'funding_desc' => 'الوصف',
        'funding_title_right' => 'عنوان يمين الصفحة',
        'funding_desc_right' => 'وصف يمين الصفحة',
        'funding_list_right' => 'قائمة يمين الصفحة',
        'home_sub_title' => 'عنوان فرعى',
        'home_title' => 'عنوان رئيسى',
        'home_desc' => 'الوصف',
        'home_sub_title_other' => 'عنوان فرعى أخر',
        'home_title_other' => 'عنوان أخر',
        'home_desc_other' => 'وصف أخر',
        'home_list' => 'قائمة',
        'home_title_midd' => 'عنوان وسط الصفحة',
        'home_desc_midd' => 'وصف وسط الصفحة',
        'home_title_icon' => 'عنوان قسم الأيقونات',
        'home_title_icon_right' => 'عنوان يمين قسم الأيقونات',
        'home_desc_icon_right' => 'وصف يمين قسم الأيقونات',
        'home_title_icon_midd' => 'عنوان وسط قسم الأيقونات',
        'home_desc_icon_midd' => 'وصف وسط قسم الأيقونات',
        'home_title_icon_left' => 'عنوان شمال قسم الأيقونات',
        'home_desc_icon_left' => 'وصف وسط قسم الأيقونات',
        'home_sub_title_bottom' => 'عنوان فرعى أخر الصفحة',
        'home_title_bottom' => 'عنوان أخر الصفحة',
        'home_desc_bottom' => 'وصف أخر الصفحة',
        'home_list_bottom' => 'قائمة أخر الصفحة',
        'categories' => 'القسم',
        'terms_title' => 'العنوان',
        'terms_desc' => 'الوصف',
        'who_title' => 'العنوان',
        'who_desc' => 'الوصف',
        'who_title_other' => 'عنوان أخر',
        'who_title_bottom' => 'عنوان أخر الصفحة',
        'who_list' => 'قائمة',
        

    ],
];