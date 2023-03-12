<form action="">
  @csrf
  <div class="flex flex-row p-5">
    <div class="flex-1 ">
    <input id="address" name="address" autocomplete="off" type="text" class="p-2 w-full bg-gray-100 rounded-md" placeholder="Search"> 
  </div>

  <div class="flex-1 ">
  <select name="category" id="" class="p-2 mr-5 bg-gray-100 w-full rounded-md">
    <option value="">Choose..</option>
  </select>
  </div>
  <div class="mr-5">
    <button type="submit" class="py-2 px-5 bg-gray-500 hover:bg-gray-400 text-white mr-5 rounded-md">Search</button>
  </div>

  </div>
</form>