<?php
use Illuminate\Support\Facades\Route;

// Dashboard
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
// Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
// Route::group(['prefix' => LaravelLocalization::setLocale().'/','middleware'=>'auth:web'],function(){    
Route::group(['prefix' => LaravelLocalization::setLocale()], function(){

    Route::get('dashboard/', 'App\Http\Controllers\Frontend\Dashboard\HomeController@index')->name('dashboard.home');
// });
    // Login
    Route::get('dashboard/login', 'App\Http\Controllers\Frontend\Dashboard\Auth\LoginController@showLoginForm')->name('dashboard.login');
    Route::post('dashboard/login', 'App\Http\Controllers\Frontend\Dashboard\Auth\LoginController@login');
    Route::post('logout', 'App\Http\Controllers\Frontend\Dashboard\Auth\LoginController@logout')->name('dashboard.logout');

    // Register
    Route::get('dashboard/register', 'App\Http\Controllers\Frontend\Dashboard\Auth\RegisterController@showRegistrationForm')->name('dashboard.register');
    Route::post('dashboard/register', 'App\Http\Controllers\Frontend\Dashboard\Auth\RegisterController@register');

    // Reset Password
    Route::get('dashboard/password/reset', 'App\Http\Controllers\Frontend\Dashboard\Auth\ForgotPasswordController@showLinkRequestForm')->name('dashboard.password.request');
    Route::post('dashboard/password/email', 'App\Http\Controllers\Frontend\Dashboard\Auth\ForgotPasswordController@sendResetLinkEmail')->name('dashboard.password.email');
    Route::get('dashboard/password/reset/{token}', 'App\Http\Controllers\Frontend\Dashboard\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('dashboard/password/reset', 'App\Http\Controllers\Frontend\Dashboard\Auth\ResetPasswordController@reset')->name('dashboard.password.update');

    // Confirm Password
    Route::get('dashboard/password/confirm', 'App\Http\Controllers\Frontend\Dashboard\Auth\ConfirmPasswordController@showConfirmForm')->name('dashboard.password.confirm');
    Route::post('dashboard/password/confirm', 'App\Http\Controllers\Frontend\Dashboard\Auth\ConfirmPasswordController@confirm');
     

    Route::resource('dashboard/employee', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerController');   
    Route::resource('dashboard/sponsore', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreController');    
    Route::get('dashboard/sponsore/single/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreController@show_single')->name('sponsore.show_single');


    // Route::get('dashboard/employee',function () {
    //     return view('/frontend/dashboard/pages/employee/index');
    //   })->name('dashboard.employee');
    
    // Route::get('dashboard/employee/create',function () {
    //   return view('/frontend/dashboard/pages/employee/create');
    // })->name('dashboard.employee.create');

    // Route::get('dashboard/employee/show',function () {
    //   return view('/frontend/dashboard/pages/employee/show');
    // })->name('dashboard.employee.show');
    // Route::get('dashboard/employee/createfile',function () {
    //   return view('/frontend/dashboard/pages/employee/createfile');
    // })->name('dashboard.employee.createfile');
    
    Route::get('dashboard/company',function(){
      return view('/frontend/dashboard/pages/company/show');
    })->name('dashboard.company.show');
    Route::get('dashboard/company/createfile',function(){
      return view('/frontend/dashboard/pages/company/createfile');
    })->name('dashboard.company.createfile');
    Route::get('dashboard/action_request',function(){
      return view('/frontend/dashboard/pages/action-request/index');
    })->name('dashboard.action-request');


    // Route::get('dashboard/action_request/company_requests',function(){
    //   return view('/frontend/dashboard/pages/action-request/company-requests');
    // })->name('dashboard.action_request.company_requests');
    // Route::get('dashboard/action_request/employee_requests',function(){
    //   return view('/frontend/dashboard/pages/action-request/employee-requests');
    // })->name('dashboard.action_request.employee_requests');
    // Route::get('dashboard/action_request/sponserd_requests',function(){
    //   return view('/frontend/dashboard/pages/action-request/sponserd-requests');
    // })->name('dashboard.action_request.sponserd_requests');

    Route::get('dashboard/wallet',function(){
      return view('/frontend/dashboard/pages/wallet/index');
    })->name('dashboard.wallet');
    Route::get('dashboard/wallet/add-to-wallet',function(){
      return view('/frontend/dashboard/pages/wallet/add-to-wallet');
    })->name('dashboard.wallet.add-to-wallet');
    Route::get('dashboard/notification',function(){
      return view('/frontend/dashboard/pages/notification/index');
    })->name('dashboard.notification');



    Route::get('dashboard/reports',function(){
      return view('/frontend/dashboard/pages/reports/index');
    })->name('dashboard.reports');


    Route::get('dashboard/reports/company_reports',function(){
      return view('/frontend/dashboard/pages/reports/company-reports');
    })->name('dashboard.reports.company_reports');
    Route::get('dashboard/reports/employee_reports',function(){
      return view('/frontend/dashboard/pages/reports/employee-reports');
    })->name('dashboard.reports.employee_reports');
    Route::get('dashboard/reports/sponserd_reports',function(){
      return view('/frontend/dashboard/pages/reports/sponserd-reports');
    })->name('dashboard.reports.sponserd_reports');

    // Route::get('dashboard/employee/sponsored-index',function(){
    //   return view('/frontend/dashboard/pages/employee/sponsored-index');
    // })->name('dashboard.employee.sponsored-index');
    // Route::get('dashboard/employee/sponsored-create',function(){
    //   return view('/frontend/dashboard/pages/employee/sponsored-create');
    // })->name('dashboard.employee.sponsored-create');
    // Verify Email
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    // Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
    // Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
    Route:: resource('dashboard/companies', 'App\Http\Controllers\Frontend\Dashboard\CompanyController');

    Route:: get('dashboard/companies/{id?}/companyFile/fileForm', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@FileForm')->name('companyfile');
    Route:: post('dashboard/companies/{id?}/companyFile/fileForm', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@addCompanyFile')->name('companyfile.addCompanyFile');
    
    Route:: get('dashboard/companies/companyFile/{id?}', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@show')->name('companyfile.show');
    
    Route:: post('dashboard/companies/companyFile/renew/{id?}', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@renew')->name('companyfile.renew');

    Route:: get('dashboard/companies/companyFile/renew_request/{id?}', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@renew_request')->name('companyfile.renew_request');

    Route:: get('dashboard/companies/companyFile/edit/{id?}', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@edit')->name('companyfile.edit');
    Route:: put('dashboard/companies/companyFile/edit/{id?}', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@update')->name('companyfile.update');

    Route:: post('dashboard/companies/companyFile/{id?}', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@destroy')->name('companyfile.destroy');



    Route:: get('dashboard/employee/{id?}/employeeFile/fileForm', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@FileForm')->name('employerfile');
    Route:: post('dashboard/employee/{id?}/employeeFile/addEmployerFile', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@addEmployerFile')->name('employerfile.addEmployerFile');
    
    Route:: get('dashboard/employee/employeeFile/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@show')->name('employerfile.show');
    
    Route:: post('dashboard/employee/employeeFile/renew/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@renew')->name('employerfile.renew');
    
    Route:: get('dashboard/employee/employeeFile/edit/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@edit')->name('employerfile.edit');
    Route:: put('dashboard/employee/employeeFile/update/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@update')->name('employerfile.update');

    Route:: post('dashboard/employee/employeeFile/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@destroy')->name('employerfile.destroy');
    Route:: get('dashboard/employee/employeeFile/renew_request/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@renew_request')->name('employerfile.renew_request');

    









    Route:: get('dashboard/sponsore/{id?}/sponsoreFile/fileForm', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@FileForm')->name('sponsorefile');
    Route:: post('dashboard/sponsore/{id?}/sponsoreFile/addSponsoreFile', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@addSponsoreFile')->name('sponsorefile.addSponsoreFile');
    
    Route:: get('dashboard/sponsore/sponsoreFile/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@show')->name('sponsorefile.show');
    
    Route:: post('dashboard/sponsore/sponsoreFile/renew/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@renew')->name('sponsorefile.renew');
    
    Route:: get('dashboard/sponsore/sponsoreFile/edit/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@edit')->name('sponsorefile.edit');
    Route:: put('dashboard/sponsore/sponsoreFile/update/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@update')->name('sponsorefile.update');

    Route:: post('dashboard/sponsore/sponsoreFile/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@destroy')->name('sponsorefile.destroy');
    Route:: get('dashboard/sponsore/sponsoreFile/renew_request/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@renew_request')->name('sponsorefile.renew_request');


    Route::resource('dashboard/company_requests', 'App\Http\Controllers\Frontend\Dashboard\Requests\CompanyRequestsController');   
    Route::resource('dashboard/employee_requests', 'App\Http\Controllers\Frontend\Dashboard\Requests\EmployeeRequestsController');   
    Route::resource('dashboard/sponsore_requests', 'App\Http\Controllers\Frontend\Dashboard\Requests\SponsoreRequestsController');   


  });