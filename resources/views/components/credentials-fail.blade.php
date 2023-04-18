{{-- SHOW FLASH ERROR MESSAGE --}}
@if (session()->get('error'))
<div x-data="{show: true}" 
x-init="setTimeout(()=>show = true)" 
x-show="show" 
class="bg-red-500 text-black-50 w-auto">
    <p>{{session('error')}}</p>
</div>
@endif
{{-- END OF ERROR MESSAGE --}}