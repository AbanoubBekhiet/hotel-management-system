<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>
<body>
    <br>
    @if ($canEdit)
    <div class="flex justify-end">
        <a href="add"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
        >Add New Room
        </a>
    </div>
    @endif
    <div>
        <form action="" method="get" class="max-w-7xl mx-auto flex flex-wrap gap-6">
            <div class="mb-5 w-[20%]">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Type</label>
                <select id="countries" name="room_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option value="">Choose A Type of Room</option>
                  <option value="single" {{Request::get('room_type') == "single" ? 'selected' : ''}} >Single</option>
                  <option value="double" {{Request::get('room_type') == "double" ? 'selected' : ''}} >Double</option>
                  <option value="triple" {{Request::get('room_type') == "triple" ? 'selected' : ''}} >Triple</option>
                  <option value="queen" {{Request::get('room_type') == "queen" ? 'selected' : ''}} >Queen</option>
                  <option value="king" {{Request::get('room_type') == "king" ? 'selected' : ''}} >King</option>
                </select>
            </div>
            <div class="mb-5 w-[20%]">
                <label for="Price Per Night" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Price Per Night</label>
                <input type="number" name="price_per_night" id="Price Per Night"  value="{{Request::get('price_per_night')}}" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500" placeholder="Price Per Night">
            </div>
            <div class="mb-5 w-[20%]">
                <label for="is_VIP" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">VIP</label>
                <select id="is_VIP" name="is_VIP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option value="">Choose a Room</option>
                  <option value="1" {{Request::get('is_VIP') == '1' ? 'selected' : ''}} >VIP</option>
                  <option value="0" {{Request::get('is_VIP') == '0' ? 'selected' : ''}} >Not VIP</option>
                </select>
            </div>
            <div class="mb-5 w-[20%]">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option value="">Choose a Room</option>
                  <option value="0" {{Request::get('status') == "0" ? 'selected' : ''}} >Active</option>
                  <option value="1" {{Request::get('status') == "1" ? 'selected' : ''}} >Not Active</option>
                </select>
            </div>
            <div class="mb-5 w-[20$] flex flex-row justify-end">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                <a href="{{url('front_desk/room/list')}}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Reset</a>
            </div>
        </form>
    </div>
    @include('messages')
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">#</th>
                    <th scope="col" class="px-6 py-3">Room Type</th>
                    <th scope="col" class="px-6 py-3">Price Per Night</th>
                    <th scope="col" class="px-6 py-3">VIP</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    @if ($canEdit)
                        <th scope="col" class="px-6 py-3">Actions</th>
                    @endif
                </tr>
            </thead>
            <tbody>

            </tbody>
            @foreach ($rooms as $room)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$room->id}}</td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$room->room_type}}</td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$room->price_per_night}}</td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$room->is_VIP == 1 ? 'VIP' : "Is not VIP"}}</td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$room->description}}</td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$room->status == 0 ? 'Active' : 'Inactive'}}</td>
                    @if ($canEdit)
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{url('admin/room/edit/'.$room->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" >Edit</a>
                            <a href="{{url('admin/room/delete/'. $room->id)}}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</a>
                        </td>
                    @endif
                </tr>
            @endforeach
        </table>
    </div>
    <br>
    <div>
        {!! $rooms->appends(Request::class::except('page'))->links() !!}
    </div>
</body>
</html>
