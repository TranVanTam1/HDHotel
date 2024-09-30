<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades;
use App\Models\Customer;
use App\Models\RoomTypes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Paginator::useBootstrapFive();

        // Chia sẻ dữ liệu người dùng với view 'layout.header'
        View::composer(['layout.header','page.account.layout'], function ($view) {
            // Lấy thông tin người dùng đã đăng nhập từ bảng 'users'
            $user = Auth::user();

            // Kiểm tra xem người dùng có bản ghi trong bảng 'customers' bằng cách sử dụng UserID
            $customer = null;
            if ($user) {
                // Giả sử cột `UserID` trong bảng `customers` tương ứng với cột `id` trong bảng `users`
                $customer = Customer::where('UserID', $user->id)->first();
            }

            // Chia sẻ thông tin khách hàng với view
            $view->with('customer', $customer);
        });
        View::composer(['layout.header'], function ($view) {
            // Lấy danh sách loại phòng từ bảng 'room_types'
            $roomTypes = RoomTypes::all();
        
            // Chia sẻ danh sách loại phòng với view
            $view->with('roomTypes', $roomTypes);
        });
    }
}
