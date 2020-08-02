<?php

namespace App\Http\Controllers;

use App\Services\AdminService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function listAdmin()
    {
        return $this->adminService->listAdmin();
    }

    public function insertAdmin()
    {
        return $this->adminService->insertAdmin();
    }

    public function processInsertAdmin(Request $request)
    {
        return $this->adminService->processInsertAdmin($request->all());
    }

    public function updateAdmin($id)
    {
        return $this->adminService->updateAdmin($id);
    }

    public function processUpdateAdmin(Request $request, $id)
    {
        return $this->adminService->processUpdateAdmin($request->all(), $id);
    }

    public function deleteAdmin($id)
    {
        return $this->adminService->deleteAdmin($id);
    }
}
