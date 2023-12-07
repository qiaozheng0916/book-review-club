@php
    $categories = \App\Models\Category::all();
    $selectedCategoryId = request('category') ? request('category') : 0;
    $selectedCategoryValue = request('category') ? $categories->find($selectedCategoryId)->category : 'All Categories';
@endphp

<div class="mb-3" style="max-width:400px">
    <strong><label style="margin-top:30px;" for="categorySelect" class="form-label">Select Category:</label></strong>
    <select class="form-select" id="categorySelect">
      <option value="{{$selectedCategoryId}}" selected>{{$selectedCategoryValue}}</option>
      <option value="0">All Categories</option>
      @foreach ($categories as $category)
        <option value="{{ $category->id}}">{{$category->category}}</option>
    @endforeach
    </select>
</div>

<script>
    document.getElementById('categorySelect').addEventListener('change', function () {
        var categoryId = this.value;
        window.location.href = '?category=' + categoryId;
    });
</script>
    
    


