<?php

use App\Enums\PaymentType;

if (!function_exists('my_toaster')) {
    function my_toaster($message = 'تم بنجاح', $alert_type = 'success')
    {
        session()->put('message', $message);
        session()->put('type', $alert_type);
    }
}
if (!function_exists('setting')) {
    function setting()
    {
        return \App\Models\Setting::firstOrCreate([]);
    }
}
if (!function_exists('main_domain')) {
    function main_domain()
    {
        return "https://donutlandksa.com";
    }
}
if (!function_exists('remove_invalid_charcaters')) {
    function remove_invalid_charcaters($str)
    {
        return str_ireplace(['\'', '"', ',', ';', '<', '>'], ' ', $str);
    }
}

if (!function_exists('showSelectElement')) {
    function showSelectElement($array, $key_name, $optionSelect = '', $attr = "")
    {
        $options = '<option value="" disabled selected>' . helperTrans('admin.chose') . ' </option>';
        if ($array != null && !empty($array) && count($array) > 0) {
            foreach ($array as $one) {
                $text = $one->{$key_name};
                $value = $one->id;
                $selected = ($optionSelect == $value) ? "selected" : "";
                $options .= '<option value="' . $value . '"  ' . $attr . '  ' . $selected . '>' . $text . '</option>';
            }
        } else {
            $options = '<option value="">' . helperTrans('admin.There are no data') . '</option>';
        }

        return $options;
    }
}
if (!function_exists('showSelectElementMultiple')) {
    function showSelectElementMultiple($array, $key_name, $array_values = [])
    {
        $options = '<option value="" disabled>' . helperTrans('admin.chose') . ' </option>';
        if ($array != null && !empty($array) && count($array) > 0) {
            foreach ($array as $one) {
                $text = $one->{$key_name};
                $value = $one->id;
                $selected = (in_array($value, $array_values)) ? "selected" : "";
                $options .= '<option value="' . $value . '"  ' . $selected . '>' . $text . '</option>';
            }
        } else {
            $options = '<option value="">' . helperTrans('admin.There are no data') . '</option>';
        }

        return $options;
    }
}

if (!function_exists('emptyList')) {
    function emptyList()
    {
        return '<img src="'.url('assets/website/img/empty-list.svg').'">';
        return view('Website.layout.inc.empty-list');
    }
}
if (!function_exists('deleteFile')) {
    function deleteFile($file)
    {
        \Storage::delete("/public/uploads/$file");
    }
}
if (!function_exists('getFileName')) {
    function getFileName($file)
    {
        return $file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
    }
}
if (!function_exists('helperTrans')) {
    function helperTrans($str)
    {

        $arrayOfKeys = explode('.', $str);
        $file = $arrayOfKeys[0] ?? 'file';
        $key = $arrayOfKeys[1] ?? '';

        $local = get_lang();

        try {
            $lang_array = include(resource_path("lang/$local/$file.php"));

            $processed_key = ucfirst(str_replace('_', ' ', remove_invalid_charcaters($key)));
            if (!array_key_exists($key, $lang_array)) {

                $lang_array[$key] = $processed_key;

                $str = "<?php return " . var_export($lang_array, true) . ";";

               file_put_contents(resource_path("lang/$local/$file.php"), $str);
                $result = $processed_key;
            } else {
                $result = __("$file.$key");
            }
        } catch (\Exception $exception) {
            $result = __("$file.$key");
        }

        return $result;

    }
}

if (!function_exists('get_lang')) {
    function get_lang()
    {
        return \LaravelLocalization::setLocale() ?? 'en';
    }
}

if (!function_exists('dropify_message')) {
    function dropify_message()
    {
        $messages = [
            "messages" => [
                'default' => helperTrans('admin.Drag and drop a file here or click'),
                'replace' => helperTrans('admin.Drag and drop or click to replace'),
                'remove' => helperTrans('admin.Remove'),
                'error' => helperTrans('admin.Ooops, something wrong happened.')
            ]
        ];
        return $messages;
    }
}
if (!function_exists('loaderInf')) {
    function loaderInf()
    {
        return '<div class="infy-loader" id="overlay-screen-lock">
    <svg class="loader-position" width="150px" height="75px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet">
        <path id="outline" fill="none" stroke="#00c6ff" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
              d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1
            c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"></path>
    </svg>
</div>';
    }
}
if (!function_exists('datatable_lang')) {
    function datatable_lang()
    {
        return [
            'sProcessing' => trans('admin.sProcessing'),
            'sLengthMenu' => trans('admin.sLengthMenu'),
            'sZeroRecords' => trans('admin.sZeroRecords'),
            'sEmptyTable' => trans('admin.sEmptyTable'),
            'sInfo' => trans('admin.sInfo'),
            'sInfoEmpty' => trans('admin.sInfoEmpty'),
            'sInfoFiltered' => trans('admin.sInfoFiltered'),
            'sInfoPostFix' => trans('admin.sInfoPostFix'),
            'sSearch' => trans('admin.sSearch'),
            'sUrl' => trans('admin.sUrl'),
            'sInfoThousands' => trans('admin.sInfoThousands'),
            'sLoadingRecords' => trans('admin.sLoadingRecords'),
            'oPaginate' => [
                'sFirst' => trans('admin.sFirst'),
                'sLast' => trans('admin.sLast'),
                'sNext' => trans('admin.sNext'),
                'sPrevious' => trans('admin.sPrevious'),
            ],
            'oAria' => [
                'sSortAscending' => trans('admin.sSortAscending'),
                'sSortDescending' => trans('admin.sSortDescending'),
            ],
        ];
    }
}

if (!function_exists('indexButtons')) {
    function indexButtons($title = "عرض", $buttonText = null,$mainText = null)
    {
        $html = "  <div class='card-header'>
                    <h6 class='card-title m-0'> {$title} </h6>
                    <!-- widgest  -->
                    <div class='d-flex align-items-center gap-3'>
                 ";
        if ($mainText != null) {
            $html .= "
                        <a href='#!' class='btn btn-primary ' id='mainData'>{$mainText}</a>";
        }
        if ($buttonText != null) {
            $html .= "
                        <a href='#!' class='btn btn-primary ' id='addBtn'>{$buttonText}</a>";
        }
        return $html . " <a href='#' class='card-fullscreen m-0' data-bs-toggle='tooltip' title='" . helperTrans('admin.full screen') . "'>
                            <i class='icon-size-fullscreen'></i>
                        </a>
                    </div></div>";

    }
}
if (!function_exists('branch')) {
    function branch()
    {
        return auth()->guard('branch');
    }
}
if (!function_exists('admin')) {
    function admin()
    {
        return auth()->guard('admin');
    }
}
if (!function_exists('api')) {
    function api()
    {
        return auth()->guard('api');
    }
}
if (!function_exists('driver')) {
    function driver()
    {
        return auth()->guard('driver');
    }
}
if (!function_exists('getPaymentType')) {
    function getPaymentType($check)
    {
        $typeMap = [
            'cash' => PaymentType::cash->value,
            'apple_pay' => PaymentType::apple_pay->value,
            'visa' => PaymentType::visa->value,
            'mada' => PaymentType::mada->value,
        ];
        return (isset($typeMap[$check])) ? $typeMap[$check] : PaymentType::cash->value;
    }
}
if (!function_exists('get_file')) {
    function get_file($file)
    {
        // Storage::exists( $file )
        if (filter_var($file, FILTER_VALIDATE_URL)) {
            $file_path = $file;
        } elseif ($file) {
            $file_path = asset('storage/uploads') . '/' . $file;
        } else {
            $file_path = asset('dashboard/assets/images/companies/img-1.png');
        }
        return $file_path;
    }//end
}

if (!function_exists('main_get_file')) {
    function main_get_file($file)
    {
        // Storage::exists( $file )
        if (filter_var($file, FILTER_VALIDATE_URL)) {
            $file_path = $file;
        } elseif ($file) {
            $file_path = main_domain() . "/$file";
        } else {
            $file_path = main_domain() . 'images/zummXD2dvAtI.png';
        }
        return $file_path;
    }//end
}
