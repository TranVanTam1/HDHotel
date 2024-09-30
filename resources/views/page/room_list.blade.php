@extends('layout.master')

@section('content')

<section class="available-rooms">
    <div class="container"><p></p><br>

        @if($availableRooms->isEmpty())
            <p>Không có phòng trống trong khoảng thời gian này.</p>
        @else
            <div class="row">
                @foreach ($availableRooms as $room)
                    <div class="col-lg-4">
                        <div class="room">
                             <!-- Hiển thị ảnh của phòng -->
                             <img src="{{asset('images/room/'.$room->image)}}" alt="Ảnh phòng" class="img-fluid" style="max-width: 100%; height: auto;">
                            <p>{{ $room->Description}}</p>
                            <p>Giá: {{ number_format($room->RoomPrice) }} VND / Đêm</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

@endsection
