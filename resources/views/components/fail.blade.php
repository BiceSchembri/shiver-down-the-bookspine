{{-- SHOW FLASH FAIL MESSAGE --}}
@if (session()->has('fail'))
<div x-data="{show: true}"
x-init="setTimeout(()=>show = false, 4000)"
    x-show="show"
    class="bg-red-500 text-black-50 w-auto">
    <p>{{session('fail')}}</p>
</div>
@endif
{{-- END OF FAIL MESSAGE --}}