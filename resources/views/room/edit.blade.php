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
    <!-- component -->
<div class="flex items-center justify-center p-12">
    <div class="mx-auto w-full max-w-[550px]">
      <form action="" method="POST">
        @csrf
        <div class="mb-5">
            <label for="room_type"
            class="mb-3 block text-base font-medium text-[#07074D]"
            >Room Type</label>
            <select id="room_type"
            name="room_type"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="single" {{$room->room_type == "single" ? 'selected' : ''}} >Single</option>
              <option value="double" {{$room->room_type == "double" ? 'selected' : ''}} >Double</option>
              <option value="triple" {{$room->room_type == "triple" ? 'selected' : ''}} >Triple</option>
              <option value="queen" {{$room->room_type == "queen" ? 'selected' : ''}} >Queen</option>
              <option value="king" {{$room->room_type == "king" ? 'selected' : ''}} >King</option>
            </select>
        </div>
        <div class="mb-5">
          <label
            for="price_per_neight"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
          Price Per Neight
          </label>
          <input
            type="number"
            name="price_per_night"
            id="price_per_night"
            placeholder="Price Per Night"
            value="{{$room->price_per_night}}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
            <label for="is_VIP"
            class="mb-3 block text-base font-medium text-[#07074D]"
            >VIP</label>
            <select id="is_VIP"
            name="is_VIP"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="1" {{$room->is_VIP == '1' ? 'selected' : ''}} >VIP</option>
              <option value="0" {{$room->is_VIP == '0' ? 'selected' : ''}} >Not VIP</option>
            </select>
        </div>
        <div class="mb-5">
            <label
              for="description"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
            Description
            </label>
            <input
              type="text"
              name="description"
              id="description"
              placeholder="Description"
              value="{{$room->description}}"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
          <div class="mb-5">
            <label for="status"
            class="mb-3 block text-base font-medium text-[#07074D]">Status</label>
            <select id="status" name="status"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="0" {{$room->status == '0' ? 'selected' : ''}} >Active</option>
              <option value="1" {{$room->status == '1' ? 'selected' : ''}} >Inactive</option>
            </select>
        </div>
        <div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
