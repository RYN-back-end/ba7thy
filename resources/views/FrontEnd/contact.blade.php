@extends('FrontEnd.layout.inc.app')
@section('special_meta')
    <link rel="canonical" href="{{url()->current()}}"/>
@endsection
@section('title')
    {{$meta['title_'.get_lang()]}}
@endsection
@section('desc_of_page')
    {{$meta['desc_'.get_lang()]}}
@endsection
@section('content')
    <style>
        .wf_customMessageBox {
            font-family: Arial, Helvetica, sans-serif;
            color: #132C14;
            background: #F5FAF5;
            box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.25);
            max-width: 90%;
            width: max-content;
            word-break: break-word;
            z-index: 11000;
            border-radius: 6px;
            border: 1px solid #A9D3AB;
            min-width: 100px;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translate(-50%, 0);
        }

        .wf_customCircle {
            position: relative;
            background-color: #12AA67;
            border-radius: 100%;
            width: 20px;
            height: 20px;
            flex: none;
            margin-right: 7px;
        }

        .wf_customCheckMark {
            box-sizing: unset !important;
            position: absolute;
            transform: rotate(45deg) translate(-50%, -50%);
            left: 6px;
            top: 9px;
            height: 8px;
            width: 3px;
            border-bottom: 2px solid #fff;
            border-right: 2px solid #fff;
        }

        .wf_customClose {
            box-sizing: border-box;
            position: relative;
            width: 18px;
            height: 18px;
        }

        .wf_customClose::after,
        .wf_customClose::before {
            content: '';
            display: block;
            box-sizing: border-box;
            position: absolute;
            width: 12px;
            height: 1.5px;
            background: #616E88;
            transform: rotate(45deg);
            border-radius: 5px;
            top: 8px;
            left: 1px
        }

        .wf_customClose::after {
            transform: rotate(-45deg)
        }</style>

    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a
                                        href="{{route('frontend.index')}}"> {{helperTrans('web.Home')}} </a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active"
                                aria-current="page"> {{helperTrans('web.contact us')}} </li>
                        </ul>
                        <h2 class="title"> {{helperTrans('web.Get in touch')}} </h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img src="{{url('assets')}}/frontend/img/3.svg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->
    <!-- Start Contact Area  -->
    <div class="axil-contact-page-area axil-section-gap">
        <div class="container">
            <div class="axil-contact-page">
                <div class="row row--30 justify-content-between">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h3 class="title mb--10">{{trans("web.Connect_title")}}.</h3>
                            <p>{{trans('web.Connect_desc')}}</p>

                            <div id='crmWebToEntityForm' class='zcwf_lblLeft crmWebToEntityForm'
                                 style='background-color: white;color: black;max-width: 600px;'>
                                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                                <META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>

                                <div class='wf_customMessageBox' id='wf_splash' style='display:none'>
                                    <div class='wf_customCircle'>
                                        <div class='wf_customCheckMark'></div>
                                    </div>
                                    <span id='wf_splash_info'></span>
                                </div>
                                <form id='webform6622830000000592151' name=WebToLeads6622830000000592151
                                      accept-charset='UTF-8'>
                                    <input type='text' style='display:none;' name='xnQsjsdp'
                                           value='184bf403ac17e003d1a2fb05ff4661f44246d9c2a5a0ff9e56ffa467ef2c734f'></input>
                                    <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
                                    <input type='text' style='display:none;' name='xmIwtLD'
                                           value='be7b0a4fdc31f95a251611809c5ee042c1140a0072d34073291e5a8b98410721a9b4700b840986efca1bb8da73f1cba7'></input>
                                    <input type='text' style='display:none;' name='actionType' value='TGVhZHM='></input>
                                    <input type='text' style='display:none;' name='returnURL' value='null'> </input>
                                    <!-- Do not remove this code. -->
                                    <div class='zcwf_row'>
                                        <div class='zcwf_col_lab'>
                                            <label for='Last_Name'>{{helperTrans('web.name')}}<span
                                                        style='color:red;'>*</span></label>
                                        </div>
                                        <div class='zcwf_col_fld form-group'>
                                            <input type='text' id='Last_Name' aria-required='true'
                                                   aria-label='Last Name'
                                                   name='Last Name' aria-valuemax='80'
                                                   maxlength='80' class="">
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>
                                    <div class='zcwf_row'>
                                        <div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label
                                                    for='Email'>{{helperTrans('web.email')}}<span
                                                        style='color:red;'>*</span></label></div>
                                        <div class='zcwf_col_fld form-group'><input type='text' ftype='email'
                                                                                    autocomplete='false'
                                                                                    id='Email'
                                                                                    aria-required='true'
                                                                                    aria-label='Email'
                                                                                    name='Email' aria-valuemax='100'
                                                                                    crmlabel='' maxlength='100'></input>
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>
                                    <div class='zcwf_row'>
                                        <div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label
                                                    for='Phone'>{{helperTrans('web.phone')}}<span
                                                        style='color:red;'>*</span></label></div>
                                        <div class='zcwf_col_fld form-group'><input type='text' id='Phone'
                                                                                    aria-required='true'
                                                                                    aria-label='Phone' name='Phone'
                                                                                    aria-valuemax='30'
                                                                                    maxlength='30'></input>
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>
                                    <div class='zcwf_row'>
                                        <div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'>
                                            <label for='LEADCF1'> {{helperTrans('web.Specialization')}} </label></div>
                                        <div class='zcwf_col_fld form-group'>
                                            <select class='zcwf_col_fld_slt' role='combobox'
                                                    aria-expanded='false'
                                                    aria-haspopup='listbox' id='LEADCF1'
                                                    onChange='addAriaSelected6622830000000592151()'
                                                    aria-required='false'
                                                    aria-label='LEADCF1' name='LEADCF1'>
                                                <option
                                                        value='-None-'>{{helperTrans('web.Choose a specialty')}}</option>
                                                @foreach($majors as $major)
                                                    <option value="{{$major->id}}">{{$major->title}}</option>
                                                @endforeach
                                            </select>
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>
                                    <div class='zcwf_row'>
                                        <div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label
                                                    for='LEADCF2'> {{helperTrans('web.service type')}} *</label></div>
                                        <div class='zcwf_col_fld form-group'><select class='zcwf_col_fld_slt'
                                                                                     role='combobox'
                                                                                     aria-expanded='false'
                                                                                     aria-haspopup='listbox'
                                                                                     id='LEADCF2'
                                                                                     onChange='addAriaSelected6622830000000592151()'
                                                                                     aria-required='false'
                                                                                     aria-label='LEADCF2'
                                                                                     name='LEADCF2'>
                                                <option value='-None-'>{{helperTrans('web.Choose a service type')}}
                                                </option>
                                                @foreach($types as $type)
                                                    <option value="{{$type->id}}">{{$type->title}}</option>
                                                @endforeach
                                            </select>
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>
                                    <div class='zcwf_row'>
                                        <div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label
                                                    for='Description'>{{helperTrans('web.your message')}}</label></div>
                                        <div class='zcwf_col_fld form-group'><textarea
                                                    style='font-family: Arial, sans-serif;'
                                                    aria-multiline='true'
                                                    id='Description' aria-required='false'
                                                    aria-label='Description'
                                                    name='Description'></textarea>
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>
                                    <div class='zcwf_row'>
                                        <div class='zcwf_col_lab'></div>
                                        <div class='zcwf_col_fld form-group'>
                                            <input type='submit' id='formsubmit' role='button'
                                                   class='formsubmit zcwf_button sendform'
                                                   value='{{helperTrans('web.send')}}' aria-label='Submit'
                                                   title='Submit'>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-location mb--40">
                            <h4 class="title mb--20">{{helperTrans('web.Contact Information')}}</h4>
                            <span class="address">
                                  @php
                                  $locale = app()->getLocale();
                                   @endphp
                                {!! $setting->{'address_'.$locale} !!}

                                                            </span>
                            <span class="phone">{{helperTrans('web.the phone')}}: <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a></span>
                            <span class="email">{{helperTrans('web.E-mail')}}:
                                    <a href="{{$setting->email}}">{{$setting->email}}</a>
                                </span>
                        </div>
                        <div class="opening-hour">
                            <h4 class="title mb--20">{{helperTrans('web.work hours')}}:</h4>
                            <p> {!! $setting->{'work_time_'.$locale} !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Google Map Area  -->
            <div class="axil-google-map-wrap axil-section-gap pb--0">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe
                                src="https://www.google.com/maps?q=%D8%A7%D9%84%D8%B4%D8%B1%D9%82%D9%8A%D8%A9,+%D8%A7%D9%84%D8%B2%D9%82%D8%A7%D8%B2%D9%8A%D9%82&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <!-- End Google Map Area  -->
        </div>
    </div>

    <!-- End Contact Area  -->
@endsection
@section('web.scripts')
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js'></script>

    <script>
        function addAriaSelected6622830000000592151() {
            var optionElem = event.target;
            var previousSelectedOption = optionElem.querySelector('[aria-selected=true]');
            if (previousSelectedOption) {
                previousSelectedOption.removeAttribute('aria-selected');
            }
            optionElem.querySelectorAll('option')[optionElem.selectedIndex].ariaSelected = 'true';
        }

        function validateEmail6622830000000592151() {
            var form = document.forms['WebToLeads6622830000000592151'];
            var emailFld = form.querySelectorAll('[ftype=email]');
            var i;
            for (i = 0; i < emailFld.length; i++) {
                var emailVal = emailFld[i].value;
                if ((emailVal.replace(/^\s+|\s+$/g, '')).length != 0) {
                    var atpos = emailVal.indexOf('@');
                    var dotpos = emailVal.lastIndexOf('.');
                    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailVal.length) {
                        alert('Please enter a valid email address. ');
                        emailFld[i].focus();
                        return false;
                    }
                }
            }
            return true;
        }

        function checkMandatory6622830000000592151() {
            var mndFileds = new Array('Last Name', 'Email', 'Phone');
            var fldLangVal = new Array('Name', 'Email', 'Phone');
            for (i = 0; i < mndFileds.length; i++) {
                var fieldObj = document.forms['WebToLeads6622830000000592151'][mndFileds[i]];
                if (fieldObj) {
                    if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                        if (fieldObj.type == 'file') {
                            alert('Please select a file to upload.');
                            fieldObj.focus();
                            return false;
                        }
                        alert(fldLangVal[i] + ' cannot be empty.');
                        fieldObj.focus();
                        return false;
                    } else if (fieldObj.nodeName == 'SELECT') {
                        if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                            alert(fldLangVal[i] + ' cannot be none.');
                            fieldObj.focus();
                            return false;
                        }
                    } else if (fieldObj.type == 'checkbox') {
                        if (fieldObj.checked == false) {
                            alert('Please accept  ' + fldLangVal[i]);
                            fieldObj.focus();
                            return false;
                        }
                    }
                    try {
                        if (fieldObj.name == 'Last Name') {
                            name = fieldObj.value;
                        }
                    } catch (e) {
                    }
                }
            }
            if (!validateEmail6622830000000592151()) {
                return false;
            }

            var urlparams = new URLSearchParams(window.location.search);
            if (urlparams.has('service') && (urlparams.get('service') === 'smarturl')) {
                var webform = document.getElementById('webform6622830000000592151');
                var service = urlparams.get('service');
                var smarturlfield = document.createElement('input');
                smarturlfield.setAttribute('type', 'hidden');
                smarturlfield.setAttribute('value', service);
                smarturlfield.setAttribute('name', 'service');
                webform.appendChild(smarturlfield);
            }

            document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled', true);
            return true;
        }

        $(document).ready(function () {
            $('#webform6622830000000592151').submit(function (e) {
                var ismandatory = checkMandatory6622830000000592151();
                e.preventDefault();
                if (ismandatory) {
                    if (typeof _wfa_track != 'undefined' && _wfa_track.wfa_submit) {
                        _wfa_track.wfa_submit(e);
                    }
                    var formData = new FormData(this);
                    $.ajax({
                        url: 'https://crm.zoho.com/crm/WebToLeadForm',
                        type: 'POST',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (data) {
                            var splashinfodom = document.getElementById('wf_splash_info');
                            splashinfodom.innerText = data.actionvalue;
                            var splashdom = document.getElementById('wf_splash');

                            // Corrected reset function
                            document.getElementById('webform6622830000000592151').reset();

                            splashdom.style.display = '';
                            setTimeout(function () {
                                splashdom.style.display = 'none';
                            }, 5000);
                            document.querySelector('.crmWebToEntityForm .formsubmit').removeAttribute('disabled');
                        },

                        error: function (data) {
                            alert('an error occurred');
                        }
                    });
                }
            });
        });

        function tooltipShow6622830000000592151(el) {
            var tooltip = el.nextElementSibling;
            var tooltipDisplay = tooltip.style.display;
            if (tooltipDisplay == 'none') {
                var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');
                for (i = 0; i < allTooltip.length; i++) {
                    allTooltip[i].style.display = 'none';
                }
                tooltip.style.display = 'block';
            } else {
                tooltip.style.display = 'none';
            }
        }
    </script>
    <!-- Do not remove this --- Analytics Tracking code starts -->
    <script id='wf_anal'
            src='https://crm.zohopublic.com/crm/WebFormAnalyticsServeServlet?rid=bbddf75eae3d3bfd66badba09e99d84beb343b5da2649405d401015531d7c442a5af6e68fa634538ed3849ee4ff5d92bgid41abd20f47a130ee7e8f26bb01aa37c3f92a8115a83471d0c9880df39af9e1ecgidfa8406fbdd60d3853c6d59f18dca7e436c6172feaebb6225e03b6ebcfe944814gid739802e96d16dadf8e4f99e68a808a82a997943376bb7f126bd5df5140430daa&tw=a1ad9e1ea614293dabc16068fbb46ce737c1a4cd800a0469b923ae7a835cdb5e'></script>
    <!-- Do not remove this --- Analytics Tracking code ends. -->

@endsection


