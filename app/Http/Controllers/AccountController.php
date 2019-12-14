<?php

namespace App\Http\Controllers;
use App\Repositories\AccountRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class AccountController extends Controller
{
    private $accountRepository;

    public function __construct(AccountRepository $accountRepo){
        $this->accountRepository = $accountRepo;
        
    }
    /**
     * Hiển thị table account.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = $this->accountRepository->all();
        return view('accounts.index')
        ->with('accounts', $accounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Hiển thị account được chọn
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = $this->accountRepository->find($id);
        if(empty($account)) {
            Flash::error('Tài khoản này không tồn tại');
            return redirect(route('accounts.index'));
        }
        //Lấy giá trị, và chuyển hướng qua giao diện xem
        return view('accounts.show')->with('account', $account);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Xóa tài khoản đó với tham số là id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = $this->accountRepository->find($id);
        if(empty($account)) {
            Flash::error('Tài khoản không tồn tại');
            return redirect(route('accounts.index'));
        }
        $this->accountRepository->delete($id);
        Flash::success('Xóa thành công tài khoản');
        return redirect(route('accounts.index'));
    }
}
