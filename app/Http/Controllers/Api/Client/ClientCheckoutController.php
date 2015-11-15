<?php

namespace CodeDelivery\Http\Controllers\Api\Client;

use CodeDelivery\Http\Controllers\Controller;
use CodeDelivery\Http\Requests;
use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\ProductRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientCheckoutController extends Controller
{
    private $repository;
    private $userRepository;
    private $productRepository;
    /**
     * @var OrderService
     */
    private $service;

    public function __construct(
        OrderRepository $repository,
        UserRepository $userRepository,
        ProductRepository $productRepository,
        OrderService $service
    )
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;
        $this->productRepository = $productRepository;
        $this->service = $service;
    }

    public function index()
    {
//        $clientId = $this->userRepository->find(Auth::user()->id)->client->id;
//        $orders = $this->repository->scopeQuery(function($query) use($clientId) {
//            return $query->where('client_id', '=', $clientId);
//        })->paginate();

        return ['index'];
    }

    public function store(Request $request)
    {
//        $data = $request->all();
//        $clientId = $this->userRepository->find(Auth::user()->id)->client->id;
//        $data['client_id'] = $clientId;
//        $this->service->create($data);

        return ['store'];
    }

    public function show($id)
    {
        return ['show'];
    }

}
