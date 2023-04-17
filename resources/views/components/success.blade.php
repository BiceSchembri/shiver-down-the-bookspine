{{-- SHOW FLASH SUCCESS MESSAGE --}}
@if (session()->has('success'))
<div x-data="{show: true}"
x-init="setTimeout(()=>show = false, 4000)"
    x-show="show"
    class="bg-green-500 text-slate-50 w-auto">
    <p>{{session('success')}}</p>
</div>
@endif
{{-- END OF SUCCESS MESSAGE --}}