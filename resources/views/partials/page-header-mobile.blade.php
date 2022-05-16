<div class="grid grid-cols-3 gap-1">
  <div class="col-span-2 relative">
    <a class="brand" href="{{ home_url('/') }}">
      <img src="@asset('images/fallen-logo-mobile.png')" srcset="@asset('images/fallen-logo-mobile@2x.png') 2x,@asset('images/fallen-logo-mobile@3x.png') 3x" width="200" height="58" alt="Fallen Builders" class="mx-5">
    </a>
  </div>
  <div class="col-span-1">
    <img src="@asset('images/logo.png')" srcset="@asset('images/logo@2x.png') 2x,@asset('images/logo@3x.png') 3x" width="103" height="103" alt="Federation of Droid Builders" class="m-auto mt-[-10px] mb-[10px]">
  </div>
</div>
<div class="relative mt-[50px]">
  {!! get_search_form(true) !!}
</div>
