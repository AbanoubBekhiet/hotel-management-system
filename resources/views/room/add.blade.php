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
                <option value="">Choose Room Type</option>
                <option value="single">Single</option>
                <option value="double">Double</option>
                <option value="triple">Triple</option>
                <option value="queen">Queen</option>
                <option value="king">King</option>
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
                <option value="">Choose Status Of VIP</option>
                <option value="1">VIP</option>
                <option value="0">Not VIP</option>
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
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
          <div class="mb-5">
            <label for="status"
            class="mb-3 block text-base font-medium text-[#07074D]">Status</label>
            <select id="status" name="status"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">Choose The Status Of Room</option>
                <option value="0">Active</option>
                <option value="1">Inactive</option>
            </select>
        </div>
        <div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
