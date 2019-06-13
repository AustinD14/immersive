<form method="post" action="{{route ('posts.store')}}"> 
    {{-- post can be patched or delete  --}}
        @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="body" placeholder="Title">
        <input type="submit">
</form>