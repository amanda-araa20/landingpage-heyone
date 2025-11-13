<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $clinicApi = config('services.kacirhi1.base_url');
        $petApi = config('services.h1.base_url');
        $h1Token = env('H1_API_TOKEN');
        $kacirh1Token = env('KACIRH1_API_TOKEN');

        // Base URL untuk storage di heiwan-web-clinic
        $clinicStorageUrl = env('KACIRHI1_STORAGE_URL', 'http://127.0.0.1:8002/storage/clinic_logos');

        try {
            // Panggil API klinik & dokter
            $clinicsResponse = Http::withToken($kacirh1Token)->get("{$clinicApi}/clinics")->json();
            $clinics = $clinicsResponse['data'] ?? [];
            
            // Transform clinic_logo_url to full URL
            foreach ($clinics as &$clinic) {
                if (!empty($clinic['clinic_logo_url'])) {
                    // Jika hanya filename, build full URL ke heiwan-web-clinic
                    if (!filter_var($clinic['clinic_logo_url'], FILTER_VALIDATE_URL)) {
                        $clinic['clinic_logo_url'] = $clinicStorageUrl . '/' . $clinic['clinic_logo_url'];
                    }
                }
            }
            
            $doctorsResponse = Http::withToken($kacirh1Token)->get("{$clinicApi}/doctors")->json();
            $doctors = $doctorsResponse['data'] ?? [];

            // Panggil API customer & pets
            $customersResponse = Http::withToken($h1Token)->get("{$petApi}/customers")->json();
            $customers = $customersResponse['data'] ?? [];
            
            $petsResponse = Http::withToken($h1Token)->get("{$petApi}/pets")->json();
            $pets = $petsResponse['data'] ?? [];

            // Hitung total
            $totalClinics = is_array($clinics) ? count($clinics) : 0;
            $totalDoctors = is_array($doctors) ? count($doctors) : 0;
            $totalCustomers = is_array($customers) ? count($customers) : 0;
            $totalPets = is_array($pets) ? count($pets) : 0;

        } catch (\Exception $e) {
            Log::error('API Error: ' . $e->getMessage());
            $clinics = $doctors = $customers = $pets = [];
            $totalClinics = $totalDoctors = $totalCustomers = $totalPets = 0;
        }

        return view('index', compact(
            'clinics',
            'doctors',
            'totalClinics',
            'totalDoctors',
            'totalCustomers',
            'totalPets'
        ));
    }
}