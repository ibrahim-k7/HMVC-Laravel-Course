<?php

namespace Modules\Sales\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Sales\App\Models\Sale;
use Modules\Sales\Http\Requests\StoreSalesRequest;
use Modules\Sales\Interfaces\SaleOutputInterface;
use Modules\Sales\Repository\SalesRepository;

class SalesController extends Controller
{
    private $salesRepository;
    public function __construct(SalesRepository $salesRepository)
    {
        $this->salesRepository = $salesRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sales::index');
    }

    public function between($startDate,$endDate,SaleOutputInterface $format){

        $sales = $this->salesRepository->between($startDate, $endDate);
        return $format->output($sales); // التأكد من إرجاع الاستجابة

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sales::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSalesRequest $request): RedirectResponse
    {
        //
        // بعد تحقق الـ Request، يمكنك استخدام البيانات لإنشاء سجل جديد
        Sale::create($request->validated());

        return redirect()->route('index')->with('success', 'Sale created successfully!');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('sales::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('sales::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
