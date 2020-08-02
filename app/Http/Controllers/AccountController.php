<?php

namespace App\Http\Controllers;

use App\Services\AccountService;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    protected $accountService;

    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }

    public function adminSignIn()
    {
        return $this->accountService->adminSignIn();
    }

    public function processAdminSignIn(Request $request)
    {
        return $this->accountService->processAdminSignIn($request->all());
    }

    public function welcomeAdmin()
    {
        return $this->accountService->welcomeAdmin();
    }

    public function adminSignOut()
    {
        return $this->accountService->adminSignOut();
    }

    public function khachHangSignInOrSignUp()
    {
        return $this->accountService->khachHangSignInOrSignUp();
    }

    public function processKhachHangSignIn(Request $request)
    {
        return $this->accountService->processKhachHangSignIn($request->all());
    }

    public function khachHangSignOut()
    {
        return $this->accountService->khachHangSignOut();
    }
}
